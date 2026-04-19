<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'shop_name','order_number','first_name','last_name','email','phone',
        'address','city','state','country','pincode','shipping_method',
        'subtotal','discount','tax','delivery_charge','total',
        'payment_method','status'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function delivery()    {
        return $this->hasOne(Delivery::class);
    }

}
