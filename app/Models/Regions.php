<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $table = 'regions';
    protected $fillable = [
        'region_name',
    ];

    /**
     * @var mixed
     */

    public function cities()
    {
        return $this->hasMany('App\Models\City', 'region_id');
    }

//    public function getCity()
//    {
//        $city = $this->cities->all();
////        $city= $city->cities;
////        foreach ($city as $cities){
//            return $this->cities;
////        }
//    }
}
