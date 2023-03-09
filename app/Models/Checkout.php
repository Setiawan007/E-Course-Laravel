<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 
        'camp_id', 
        'payment_status', 
        'midtrans_url', 
        'midtrans_booking_code'
    ];

    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function Camp()
    {
        return $this->belongsTo(Camp::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
