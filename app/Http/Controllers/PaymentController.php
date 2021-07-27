<?php

namespace App\Http\Controllers;

use App\Interest;
use App\Payment;
use App\Property;
use App\Purchase;
use Auth;
use Illuminate\Http\Request;
use App\Sitesetting;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->paystackKey = Sitesetting::where('id', '1')->first()->sk_test;
    }

    public function pay(Request $request)
    {
        if (Auth::check()) {
            $pro = Property::findOrFail($request->prop_id);
            $reference = \Str::random(4) . time();
            $callback_url = route('verify-property-pay');
            $payment = new Payment();
            $payment->user_id = Auth::user()->id;
            $payment->amount = $request->amount;
            $payment->property_id = $pro->id;
            $payment->reference = $reference;
            $payment->status = 'in process';
            $payment->save();

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode([
                    'amount' => $request->amount * 100,
                    'email' => Auth::user()->email,
                    'callback_url' => $callback_url,
                    'metadata' => ['reference' => $reference, 'property' => $request->property_id],
                ]),
                CURLOPT_HTTPHEADER => [
                    "authorization: Bearer " . $this->paystackKey, //replace this with your own test key
                    "content-type: application/json",
                    "cache-control: no-cache"
                ],
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            if ($err) {
                // there was an error contacting the Paystack API
                die('Curl returned error: ' . $err);
            }
            $tranx = json_decode($response, true);
            if (!$tranx['status']) {
                // there was an error from the API
                print_r('API returned error: ' . $tranx['message']);
            }
            // comment out this line if you want to redirect the user to the payment page
            print_r($tranx);
            // redirect to page so User can pay
            // uncomment this line to allow the user redirect to the payment page
            return redirect($tranx['data']['authorization_url']);
        }
        return redirect(route('login'));
    }
    public function verifyPayment()
    {
        $curl = curl_init();
        $reference = isset($_GET['reference']) ? $_GET['reference'] : '';
        if (!$reference) {
            die('No reference supplied');
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer " . $this->paystackKey,
                "cache-control: no-cache"
            ],
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        if ($err) {
            // there was an error contacting the Paystack API
            die('Curl returned error: ' . $err);
        }
        $tranx = json_decode($response, true);
        // dd($tranx);
        if (!$tranx['status']) {
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }
        if ('success' == $tranx['data']['status']) {
            $payment = Payment::where('reference', $tranx['data']['metadata']['reference'])->first();
            $payment->status = 'success';
            $payment->save();

            $intrest = Interest::where('user_id', Auth::user()->id)->where('property_id', $payment->property_id)->first();
            if ($intrest) {
                $intrest->delete();
            }

            $pro = Property::find($payment->property_id);
            $pro->status = 'sold';
            $pro->save();

            return redirect(route('payment-success'));
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            // Give value
        }
    }

    public function successPage()
    {
        return view('success');
    }
}