<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    protected $table = 'ticket_types';
    protected $guarded = '';


    public function ticket()
    {
        $this->hasMany(Ticket::class, 'ticket_id');

    }

    public function price()
    {
        $this->hasMany(Price::class, 'ticket_id');

    }

    public function getAllTickets()
    {
        return $this->ticket_type;
    }

}
