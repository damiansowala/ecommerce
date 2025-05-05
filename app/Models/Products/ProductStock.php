<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    use HasFactory;

    protected $table = 'product_stocks';

    // Określamy, które pola można masowo przypisać
    protected $fillable = [
        'quantity',
        'low_stock',
        'notifications'
    ];

    // Relacja z produktem
    public function product()
    {
        return $this->hasOne(Product::class, 'stock_id');
    }
}
