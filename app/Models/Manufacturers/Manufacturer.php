<?php

namespace App\Models\Manufacturers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $table = 'manufacturers';
    protected $casts = [
        'status' => 'boolean',
    ];
    protected $fillable = [
        'name',
        'contact_person',  // Osoba kontaktowa
        'phone',    // Numer telefonu
        'email',           // Adres e-mail
        'street',
        'postal_code',
        'city',
        'nip',
        'regon',
        'code',
        'krs',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
