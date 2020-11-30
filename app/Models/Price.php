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
        'course_type_id',
        'ticket_id'
    ];

    public function transportType()
    {
        return $this->belongsTo(TransportType::class, 'transport_id');

    }

    public function ticketType()
    {
        return $this->belongsTo(TicketType::class, 'ticket_id');

    }

    public function courseType()
    {
        return $this->belongsTo(CityCourseType::class, 'course_type_id');

    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');

    }
    public function ticket()
    {
        return $this->hasMany(Ticket::class,'price_id');
    }

    public function getPrice()
    {
        return $this->price;

    }
}
