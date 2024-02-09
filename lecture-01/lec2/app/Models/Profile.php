<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable =
    ['last_name','age','mobile' , 'first_name','address','gender'];
    // protected $guarded = [];

    protected $table = 'profiles';
    protected $primaryKey = 'profile_id';
    // protected $keyType = 'string';
    // public $incrementing = false;
    // public $timestamps = false;

    // public const CREATED_AT = 'maked_at';
    // public const UPDATED_AT = 'edited_at';

    protected $hidden = [
        'age',
    ];
}
