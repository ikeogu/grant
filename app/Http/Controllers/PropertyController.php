<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Custom\SanitizeInput;
use Str;
use Auth;
use App\PropertyPhoto;
use App\State;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Mail;
use App\Mail\PropertyRequest;
use App\Mail\AccountCreationMail;
use App\User;
use App\Interest;
use App\Notification;
use DB;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class PropertyController extends Controller
{


    public function __construct()
    {
        // $this->middleware('guest');
        $this->sanitize = new SanitizeInput;
        // Session('prev_page') = Request::url();
    }

    public function index(Request $request)
    {
        // dd($request->url());
        Session(['prev_page' => $request->url()]);
        if (Auth::check()) {
            $interestArr = [];
            foreach (myWishlist() as $interest) {
                // $pair = [$interest->id=>$interest->property_id];
                $interestArr[$interest->id] = $interest->property_id;
                // array_push($interestArr, $pair);
                // dd($pair);
            }
            $data['interestArr'] = $interestArr;
        }

        $data['properties'] = Property::paginate(16);
        $data['beds'] = DB::select("SELECT DISTINCT beds FROM properties WHERE beds > 0 ORDER BY beds ASC ");
        return view('property.index')->with($data);
    }

    public function uploadProperty(Request $request)
    {

        // dd($request->all());
        $request->validate(
            [
                'title' => 'required|string|max:30',
                // 'bedrooms'=>'numeric',
                // 'toilets'=>'numeric',
                // 'details'=>'string',
                // 'detail'=>'string',
                // 'list_type'=>'required',
                // 'area'=>'numeric',
                // 'length'=>'numeric',
                // 'width'=>'numeric',
                // 'address'=>'required|string',
                'state' => 'required|numeric',
                'city' => 'required|string',
                'location' => 'required|string',
                'cover_photo' => 'required|image|mimes:jpeg,jpg,png|max:1024',
                'price' => 'required|numeric',

            ]
        );

        // dd($request);

        $property = new Property;
        $property->title = $this->sanitize->sanitizeInput($request->title);
        $property->area = (int)$this->sanitize->sanitizeInput($request->area);
        $property->length = (int)$this->sanitize->sanitizeInput($request->length);
        $property->width = (int)$this->sanitize->sanitizeInput($request->width);
        $property->list_type = $this->sanitize->sanitizeInput($request->list_type);
        $property->house_type = $this->sanitize->sanitizeInput($request->house_type);
        $property->property_type = $this->sanitize->sanitizeInput($request->property_type);
        $property->beds = (int)$this->sanitize->sanitizeInput($request->bedrooms);
        $property->baths = (int)$this->sanitize->sanitizeInput($request->toilets);
        $property->address = $this->sanitize->sanitizeInput($request->address);
        $property->state = $this->sanitize->sanitizeInput($request->state);
        $property->city = $this->sanitize->sanitizeInput($request->city);
        $property->location = $this->sanitize->sanitizeInput($request->location);
        $property->major_road = $this->sanitize->sanitizeInput($request->major_road);
        $property->landmark = $this->sanitize->sanitizeInput($request->landmark);
        if (!empty($request->details)) {
            $property->description = $this->sanitize->sanitizeInput($request->details);
        }
        if (!empty($request->detail)) {
            $property->description = $this->sanitize->sanitizeInput($request->detail);
        }

        $property->price = $this->sanitize->sanitizeInput($request->price);
        $property->user_id = Auth::user()->id;
        $code = Str::random(6);
        $property->slug = $property->title . '-' . $code;
        $property->code = $code;


        $img = $request->file('cover_photo');

        $imgFullname = $img->getClientOriginalName();
        $imgExt = $img->getClientOriginalExtension();
        // $imgnameonly =pathinfo(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $imgFullname)), PATHINFO_FILENAME);
        $imgnameonly = pathinfo($imgFullname, PATHINFO_FILENAME);
        $imgToDb = $imgnameonly . '_' . time() . '.' . $imgExt;
        $path = $img->storeAs('public/properties/cover_images', $imgToDb);

        $property->cover_photo = $imgToDb;

        $property->save();


        if ($request->hasFile('other_photos')) {
            foreach ($request->file('other_photos') as $key => $photo) {


                $photoFullname = $photo->getClientOriginalName();
                $photoExt = $photo->getClientOriginalExtension();
                $photonameonly = pathinfo(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $photoFullname)), PATHINFO_FILENAME);
                // $photonameonly = pathinfo($photoFullname, PATHINFO_FILENAME);
                $photoToDb = $photonameonly . '_' . time() . '.' . $photoExt;
                $path = $photo->storeAs('public/properties/other_photos', $photoToDb);

                $otherPhoto = new PropertyPhoto;

                $otherPhoto->photo = $photoToDb;
                $otherPhoto->property_id = $property->id;

                $otherPhoto->save();
            }
        }

        if (Auth::user()->isAdmin == 1) {
            return redirect()->route('admin-edit-property', $property->slug)->with('success', 'property added');
        }
        return redirect()->route('my_pro')->with('success', 'property added');
    }

    public function editProperty($slug)
    {
        $data['property'] = Property::where(['slug' => $slug, 'user_id' => Auth::user()->id])->first();
        $data['page_title'] = 'Edit Property';
        $data['states'] = State::all();
        return view('property.edit')->with($data);
        // dd($property);
    }

    public function deletePhoto(Request $request)
    {
        PropertyPhoto::where('id', $request->id)->delete();

        return 'success';
    }

    public function updateProperty(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|string|max:30',
                'bedrooms' => 'numeric',
                'toilets' => 'numeric',
                'details' => 'string',
                'detail' => 'string',
                'list_type' => 'required',
                'area' => 'numeric',
                'length' => 'numeric',
                'width' => 'numeric',
                'address' => 'required|string',
                'state' => 'required|numeric',
                'city' => 'required|string',
                'location' => 'required|string',
                'cover_photo' => 'image|mimes:jpeg,jpg,png|max:1024',
                'price' => 'required|numeric',

            ]
        );

        // dd($request);

        $property = Property::where('slug', $request->slug)->first();
        $property->title = $this->sanitize->sanitizeInput($request->title);
        $property->area = (int)$this->sanitize->sanitizeInput($request->area);
        $property->length = (int)$this->sanitize->sanitizeInput($request->length);
        $property->width = (int)$this->sanitize->sanitizeInput($request->width);
        $property->list_type = $this->sanitize->sanitizeInput($request->list_type);
        $property->house_type = $this->sanitize->sanitizeInput($request->house_type);
        $property->property_type = $this->sanitize->sanitizeInput($request->property_type);
        $property->beds = (int)$this->sanitize->sanitizeInput($request->bedrooms);
        $property->baths = (int)$this->sanitize->sanitizeInput($request->toilets);
        $property->address = $this->sanitize->sanitizeInput($request->address);
        $property->state = $this->sanitize->sanitizeInput($request->state);
        $property->city = $this->sanitize->sanitizeInput($request->city);
        $property->location = $this->sanitize->sanitizeInput($request->location);
        $property->major_road = $this->sanitize->sanitizeInput($request->major_road);
        $property->landmark = $this->sanitize->sanitizeInput($request->landmark);
        $property->description = $this->sanitize->sanitizeInput($request->details);
        $property->price = $this->sanitize->sanitizeInput($request->price);

        // $property->slug = str_replace(' ', '-', $property->title).'-'.Str::random(6);

        if ($request->hasFile('cover_photo')) {

            if (file_exists(public_path('storage/properties/cover_images/' . $request->current_photo)) && is_file(public_path('storage/properties/cover_images/' . $request->current_photo))) {
                unlink(public_path('storage/properties/cover_images/' . $request->current_photo));
            }

            $img = $request->file('cover_photo');
            $imgFullname = $img->getClientOriginalName();
            $imgExt = $img->getClientOriginalExtension();
            $imgnameonly = pathinfo(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $imgFullname)), PATHINFO_FILENAME);
            // $imgnameonly = pathinfo($imgFullname, PATHINFO_FILENAME);
            $imgToDb = $imgnameonly . '_' . time() . '.' . $imgExt;
            $path = $img->storeAs('public/properties/cover_images', $imgToDb);
            $property->cover_photo = $imgToDb;
        } else {
            $property->cover_photo = $request->current_photo;
        }

        $property->save();


        if ($request->hasFile('other_photos')) {
            foreach ($request->file('other_photos') as $key => $photo) {


                $photoFullname = $photo->getClientOriginalName();
                $photoExt = $photo->getClientOriginalExtension();
                $photonameonly = pathinfo(preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '_', $photoFullname)), PATHINFO_FILENAME);
                // $photonameonly = pathinfo($photoFullname, PATHINFO_FILENAME);
                $photoToDb = $photonameonly . '_' . time() . '.' . $photoExt;
                $path = $photo->storeAs('public/properties/other_photos', $photoToDb);

                $otherPhoto = new PropertyPhoto;

                $otherPhoto->photo = $photoToDb;
                $otherPhoto->property_id = $property->id;

                $otherPhoto->save();
            }
        }

        return redirect()->route('admin-edit-property', $property->slug)->with('success', 'updated');
    }

    public function show($slug)
    {
        $data['property'] = Property::where('slug', $slug)->first();

        return view('property.detail')->with($data);
    }

    public function sendMessage(Request $request)
    {

        $cc = Property::where('code', $request->code)->first();
        // dd($cc);
        if (is_null($cc)) {
            Session(['alert' => 'success', 'msg' => 'incorrect code']);
            return redirect()->back();
        }
        if (!Auth::check()) {
            /* $request->validate(
                [
                    'firstname' => ['required', 'string', 'max:255'],
                    'lastname' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone' => ['required', 'max:11', 'unique:users'],
                    'code'=> ['required'],
                ]);*/

            /*return Validator::make(array $request, [

                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone' => ['required', 'max:11', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'password_confirmation' => ['required', 'string'],
                'code'=> ['required'],
            ]);*/

            $user = User::where('email', $request->email)->first();
            if (is_null($user)) {
                $user = new User;
                $password = Str::random(8);
                $encPassword = Hash::make($password);
                $user->firstname = $this->sanitize->sanitizeInput($request->firstname);
                $user->lastname = $this->sanitize->sanitizeInput($request->lastname);
                $user->email = $this->sanitize->sanitizeInput($request->email);
                $user->phone = $this->sanitize->sanitizeInput($request->phone);
                $user->password = $encPassword;
                Session(['password' => $password]);

                $user->save();
                Mail::to($user->email)->send(new AccountCreationMail($user));
                if (Auth::attempt(['email' => $request->email, 'password' => $password])) {
                    $this->insertInterest($request->code, $user->id);

                    return redirect()->route('my-interests')->with('success', 'interest indicated');
                }
            } else {
                $this->insertInterest($request->code, $user->id);
                Session(['alert' => 'info', 'msg' => 'your email is already registered, login to proceed']);
                return redirect()->route('login');
            }
        } else {
            $user = Auth::user();
        }
        /*Session(['request' => [

                            'code'=>$request->code,
                            'message'=>$request->message,
                        ]
                    ]);*/
        // Mail::to('nnebuchiosigbo340@gmail.com')->send(new PropertyRequest($user));
        $this->insertInterest($request->code, $user->id);
        // $this->sendNotification('New Property Request');
        Session(['alert' => 'success', 'msg' => 'interest indicated']);
        return redirect()->route('my-interests');
    }

    public function insertInterest($code, $user_id)
    {
        $property = Property::where('code', $code)->first();
        $interest = new Interest();
        $interest->user_id = $user_id;
        $interest->property_id = $property->id;
        $interest->save();
        return $interest->id;
    }

    public function sendNotification($message)
    {
        $notify = new Notification;
        $notify->message = $message;
        return $notify->save();
    }
}