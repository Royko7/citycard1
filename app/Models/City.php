<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class City extends Model
{

    protected $table = 'city';
    protected $fillable = [
        'city_name',
        'region_id'
    ];


    public function regions()
    {
        return $this->belongsTo('App\Models\Regions', 'region_id');
    }

    public function courses()
    {
        return $this->hasMany('App\Models\Course', 'city_id', 'id');

    }

//    public function getCourse()
//    {
//        $city = Course::all();
//        foreach ($city as $course){
//            $course->cities;
//        }
//        return $this->course;
//    }
}
