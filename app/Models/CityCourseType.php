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
        return $this->hasOne('App\Models\Course', 'type_id');
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'course_id');
    }
    public function price()
    {
        $this->hasMany(Price::class, 'ticket_id');

    }
}
