<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tree extends Model
{
    protected $guarded = array('id');

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function links() {
        return $this->belongsToMany('App\Link')
            ->withPivot('order')
            ->orderBy('order', 'asc');
    }
}