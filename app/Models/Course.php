<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'city_course';
    protected $fillable = [
        'start_course',
        'end_course',
        'city_id'
    ];

    public function cities()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function stops()
    {
        return $this->hasMany('App\Models\Stop','course_id');
    }
}
