<?php

namespace App\Models\Clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Trader;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address_id',
        'company_id',
        'client_group_id',
        'status',
        'client_caretaker_id',
        'verified',
        'client_kind',
        'client_type'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function clientGroup()
    {
        return $this->belongsTo(ClientGroup::class);
    }

    public function caretaker()
    {
        return $this->belongsTo(ClientCaretaker::class, 'client_caretaker_id');
    }

    public function notes()
    {
        return $this->hasMany(ClientNote::class, 'user_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function groups()
    {
        return $this->belongsToMany(ClientGroup::class, 'client_group_client');
    }

    public function traders()
    {
        return $this->belongsToMany(Trader::class, 'client_group_trader', 'client_group_id', 'trader_id')
            ->select('traders.id', 'traders.name');
    }
}
