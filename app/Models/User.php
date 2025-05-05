<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Enums\ActiveStatusEnum;
use Spatie\Permission\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'surname', // Dodano pole surname
        'email',
        'password',
        'status', // Dodano pole status
        'role', // Dodano pole role
        'login', // Dodano pole login
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => ActiveStatusEnum::class,
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if (is_null($user->status)) {
                $user->status = ActiveStatusEnum::ACTIVE->value; // użycie wartości enuma
            }
        });
    }


    public function getRoleNames($id): string
    {
        $role = Role::find($id);
        return  $role->name;
    }

    public function getStatusLabel(): string
    {
        return $this->status->label();
    }
    public function getStatusValue(): string
    {
        return $this->status->value;
    }

    /**
     * Get the full name of the user.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->surname}"; // Łączenie name i surname
    }


    public function notes()
    {
        return $this->hasMany(ClientNote::class);
    }
}
