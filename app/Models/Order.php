<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
       'customer_name',
        'email',
        'service_needed',
        'part_name',
        'quantity',
        'description',
        ];
}