<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $table = 'transports';
    protected $fillable = [
        'transport_name',
        'course_id',
        'type_id'
    ];

    public function courses()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }


    public function transportType()
    {
        return $this->belongsTo('App\Models\TransportType', 'type_id');
    }


    public function getTypeNameAttribute()
    {
        return $this->transportType();
    }

}
