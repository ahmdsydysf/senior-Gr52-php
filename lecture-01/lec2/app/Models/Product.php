<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' , 'price' , 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'product_users',
            'product_id',
            'user_id',
            'id',
            'id'
        );
    }


}
