<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myorders_items extends Model
{
    use HasFactory;

    protected $fillable = [
        'Order_id',
        'Product_id',
        'Quantity',

    ];
}