<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'ass_id';

    /* public function courses () {
        return $this->hasMany('App\Course', 'course_id');
    } */
}
