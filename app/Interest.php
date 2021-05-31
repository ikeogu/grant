<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    public function property(){
    	return $this->hasOne(Property::class, 'id', 'property_id');
    }

    public function user(){
    	return $this->hasOne(User::class, 'id', 'user_id');
    }
}
