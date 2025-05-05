<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients\ClientGroup;

class Trader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'commission',
        'status',
    ];

    public function clientGroups()
    {
        return $this->belongsToMany(ClientGroup::class, 'client_group_trader');
    }
}
