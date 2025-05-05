<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    /**
     * Atrybuty, które można masowo przypisać.
     */
    protected $fillable = [
        'name', // Nazwa informacji
        'value', // Wartość informacji
    ];

    /**
     * Relacja do produktu (jeśli chcesz, by info było powiązane z produktem).
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
