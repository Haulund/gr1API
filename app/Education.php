<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];
    protected $primaryKey = "edu_id";
    protected $table = 'educations';
}
