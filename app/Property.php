<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function otherPhotos(){
    	return $this->hasMany(PropertyPhoto::class);
    }

    public function interests(){
    	return $this->hasMany(Interest::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    // public function count(){
    // 	return $this->count();
    // }
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}