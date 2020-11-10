<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'city_course';
    protected $fillable = [
        'title',
        'start_course',
        'end_course',
        'city_id',
        'type_id'
    ];

    public function cities()
    {
        return $this->belongsTo('App\Models\City', 'city_id');
    }

    public function stops()
    {
        return $this->hasMany('App\Models\Stop', 'course_id');
    }

    public function transports()
    {
        return $this->hasMany('App\Models\Transport', 'course_id');
    }

    public function courseType()
    {
        return $this->belongsTo('App\Models\CityCourseType', 'type_id');
    }




}

