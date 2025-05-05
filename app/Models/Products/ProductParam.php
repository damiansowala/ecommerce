<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductParam extends Model
{
    use HasFactory;

    protected $fillable = [
        'weight',
        'width',
        'height',
        'length',
    ];

    // Relacja z produktem (jeśli istnieje)
    public function product()
    {
        return $this->hasOne(Product::class, 'params_id');
    }
}
