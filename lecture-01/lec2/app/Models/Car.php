<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;



    public function owner()
    {
        return $this->hasOne(User::class, 'car_id', 'id');
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id', 'id');
    }
}
