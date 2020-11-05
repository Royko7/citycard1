<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityCourseType extends Model
{
    protected $table = 'city_course_types';

    protected $fillable = [
        'course_type',
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course','type_id');
    }

}
