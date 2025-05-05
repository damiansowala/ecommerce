<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trader;

class ClientGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desc'
    ];



    public function traders()
    {
        return $this->belongsToMany(Trader::class, 'client_group_trader');
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_group_client');
    }
}
