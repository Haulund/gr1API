<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'school_id';
    

    public function school () {
        return $this->hasMany('App\School', 'school_id');
       /*  return $this->hasOne('App\School', 'school_id', 'dep_id'); */
    }

    public function school2() {
        return $this->belongsTo('App\School');
    }
}
