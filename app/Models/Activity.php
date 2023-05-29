<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_phone',
        'customer_name',
        'driver_id',
        'shipment_date',
        'shipment_status',
        'origin_address',
        'destination_address',
    ];

}
