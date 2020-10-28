<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'region';
    protected $fillable = [
        'region_name',
    ];

    public function cities()
    {
        return $this->belongsToMany('App\Models\City');
    }

//    public function getCity()
//    {
//        if ($this->city !==null){
//            return $this->city->city_name;
//        }
//        else return 'Не вказано';
//    }

}
