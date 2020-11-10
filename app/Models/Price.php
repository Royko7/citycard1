<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';
    protected $fillable = [
        'price',
        'transport_id',
        'course_id',
        'ticket_id'
    ];

    public function transportType()
    {
        return $this->belongsTo(TransportType::class, 'transport_id');

    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'transport_id');

    }

    public function courseType()
    {
        return $this->belongsTo(CityCourseType::class, 'transport_id');

    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function getPrice()
    {
        return $this->price;

    }
}
