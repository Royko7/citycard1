<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    protected $table = 'stops';
    protected $fillable = [
        'stops_name',
        'course_id'
    ];
    public function courses()

    {
        return $this->belongsTo('App\Models\Course','course_id');
    }

}
