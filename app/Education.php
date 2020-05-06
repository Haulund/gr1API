<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];
    protected $primaryKey = "dep_id";
    protected $table = 'educations';

    public function department () {
        return $this->hasMany('App\Department', 'dep_id');
       /*  return $this->hasOne('App\School', 'school_id', 'dep_id'); */
    }
}
