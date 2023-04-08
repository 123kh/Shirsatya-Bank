<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    Protected $table='customer';
    Protected $fillable=[ 
                        'customer_name',
                        'email',
                        'whatsapp_number',
                        'alternetive_number',
                        'address',
                        'select_city',
                        'photo',
                        'pan',
                        'adhar',
                        'adharno',
                        'panno',
                        'status'
                    ];
}
