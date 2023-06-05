<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Add the 'name' attribute to the fillable array
        'email',
        'phone_number',
        'address',
        'address_detail',
        'quantity',
        'del_date',
        'message',
        'total',
        'status',
    ];
}


