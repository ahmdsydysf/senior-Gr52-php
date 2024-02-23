<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->hasOne(Car::class, 'mechanic_id', 'id');
    }

    public function carOwner()
    {
        return $this->hasOneThrough(
            User::class,
            Car::class,
            'mechanic_id',
            'car_id',
            'id',
            'id'
        );
    }
}
