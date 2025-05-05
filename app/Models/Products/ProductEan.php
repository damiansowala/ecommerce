<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class ProductEan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'ean13',
        'ean8',
        'ean128',
        'ean14',
    ];

    /**
     * Relacja do produktu.
     */
    public function product()
    {
        return $this->hasOne(Product::class, 'ean_id');
    }
}
