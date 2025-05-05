<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'nip',
        'regon',
        'krs',
        'client_address_id'
    ];

    public function address()
    {
        return $this->belongsTo(ClientAddress::class, 'client_address_id');
    }
}
