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
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    // protected function Email(): Attribute
    // {
    //     return Attribute::make(
    //         get:fn ($value) => ucfirst($value) . 'karim'
    //     );
    // }
    // protected function email(): Attribute
    // {
    //     return Attribute::make(
    //         set:fn ($value) => ucfirst($value) . 'karim',
    //         get:fn ($value) => strtoupper($value)
    //     );
    // }

    // ---------------mutator----------------
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtoupper($value);
    }
    // --------------Accessor-----------------
    public function getEmailAttribute($value)
    {
        return strtoupper($value);
    }
}
