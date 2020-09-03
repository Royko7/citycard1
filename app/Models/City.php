<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;

class City extends Model
{

  protected $table = 'city';
  protected $fillable = ['city_name'];


}
