<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sitesetting extends Model
{
    //
    protected $table = 'site_settings';
    protected $fillable = ['paystack'];
}