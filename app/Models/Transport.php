<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
        'transport_name',
        'transport_type',
        'course_id'
    ];

    public function courses()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function getCourse()
    {
        return $this->courses();
    }


//    public function city()
//    {
//        $city = City::all();
//        foreach ($city as $cities)
//        {
//
//        }
//            return $this->city();
//    }


}
