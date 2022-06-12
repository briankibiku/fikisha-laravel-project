<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'customer_name',
        'customer_phone',
        'load_capacity',
        'destination',
        'priority',
        'description',
        'due_date',
        'status',
        'vehicle_vin',
    ];

}
