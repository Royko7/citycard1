<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransportType extends Model
{
    protected $table = 'transport_types';
    protected $fillable = [
        'transport_type'
    ];
    protected $transport_type;

    public function transport()
    {
        return $this->hasMany('App\Models\Transport', 'type_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Models\Ticket', 'transport_id');
    }
    public function price()
    {
        $this->hasMany(Price::class, 'ticket_id');

    }
    public function getType()
    {
        return $this->transport_type;
    }
}
