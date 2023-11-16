<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const ROLE_ADMIN = 'Admin';
    const ROLE_MANAGER = 'Manager';
    const ROLE_CUSTOMER = 'Customer';
    const ROLE_DEFAULT = self::ROLE_CUSTOMER;

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_MANAGER => 'Manager',
        self::ROLE_CUSTOMER => 'Customer'
    ];

    public function isAdmin()
    {
        return $this->role == self::ROLE_ADMIN;
    }

    public function isManager()
    {
        return $this->role == self::ROLE_MANAGER;
    }

    public function uncompletedProfile()
    {
        if ($this->phone_number === null || $this->city === null || $this->address === null || $this->date_of_birth === null || $this->affilation === null) return true;
    }

    public function isSuspend()
    {
        return $this->status === 'suspend';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone_number',
        'city',
        'address',
        'date_of_birth',
        'affilation',
        'status',
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
        'password' => 'hashed',
    ];
}
