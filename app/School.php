<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'school_id';

    public function department () {
        return $this->hasMany('App\Department', 'dep_id');
    }
}
