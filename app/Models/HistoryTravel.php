<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryTravel extends Model
{
    protected $fillable = [
        'price'
    ];


    public function card()
    {
        return $this->hasMany('\App\Models\Card','card_id');
    }
}
