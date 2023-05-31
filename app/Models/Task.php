<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_names',
        'customer_phone',
        'driver_id',
        'depot',
        'shipment_date',
        'shipment_status',
        'origin_address',
        'destination_address',
    ];

}
