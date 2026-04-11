<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'order_id', 'delivery_person_name', 'delivery_person_phone',
        'status', 'notes', 'assigned_at', 'delivered_at'
    ];

    protected $casts = [
        'assigned_at'  => 'datetime',
        'delivered_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
