<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'destination',
        'airport',
        'driver_status',
        'product_id',
        'quantity',
        'price',
        'deposit',
        'totaldeposit',
        'id_passport',
        'pickup_date',
        'dropoff_date',
        'total_days',
        'total_price',
        'terms_condition',
        'status',
        'payment_method',
        'payment_id',
    ];

}
