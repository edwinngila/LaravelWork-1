<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'productName', 
        'productPrice',
        'productDescription', 
        'productImg'
    ];
}
