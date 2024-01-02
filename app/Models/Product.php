<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;
    
 protected $fillable = [
    'name',
    'price',
    'plate_number',
    'total_seating',
    'description',
    'image',
    'inner_image',
    'availability_status',
    
   
];
public function getAvailabilityStatusAttribute()
{
    // Your booking logic to calculate availability status
    $latestBooking = Booking::where('product_id', $this->id)
        ->where('status', 'completed')
        ->latest('dropoff_date')
        ->first();

    if ($latestBooking && now()->lt(Carbon::parse($latestBooking->dropoff_date))) {
        return 'Booked';
    } else {
        return 'Available';
    }
}
}
