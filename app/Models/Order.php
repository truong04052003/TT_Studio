<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    function products(){
        return $this->belongsToMany(OrderDetail::class);
    }
    function order_details()
    {
        return $this->hasMany(order_detail::class, 'order_id', 'id');
    }
}
