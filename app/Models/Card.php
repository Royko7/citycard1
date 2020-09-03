<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Card extends Model
{
    protected $table = 'cards';
    protected $fillable = ['balance', 'number'];


    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }

    public function historyTravel()
    {
        return $this->belongsTo('\App\HistoryTravel');
    }
}
