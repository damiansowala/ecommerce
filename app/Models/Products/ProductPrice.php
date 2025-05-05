<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'price_type',
        'net_price',
        'gross_price',
        'margin',
        'min_purchase',
        'sales_method_id'
    ];
}
