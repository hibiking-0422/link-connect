<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $guarded = array('id');

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function trees() {
        return $this->belongsToMany('App\Tree');
    }
}
