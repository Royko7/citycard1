<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    protected $table = 'routes';
    protected $fillable = [
        'city',
        'ticket_type',
        'transport_type'

        ];
}
