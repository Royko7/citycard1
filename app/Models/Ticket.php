<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = [
        'tick_name',
        'transport_id',
        'course_id',
        'ticket_id',
//        'price_id'
    ];

    public function transportType()
    {
        return $this->belongsTo(TransportType::class, 'transport_id');

    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'ticket_id');

    }

    public function getTicketType()
    {
        return $this->ticketType();
    }

    public function courseType()
    {
        return $this->belongsTo(CityCourseType::class, 'transport_id');

    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function getTransportId()
    {
        return $this->transport_id;
    }

    public function getCourseId()
    {
        return $this->course_id;
    }

    public function getTicketId()
    {
        return $this->ticket_id;
    }

    public function getPriceId()
    {
        return $this->price_id;
    }

    public function getPrice()
    {
        return $this->price();
    }


}
