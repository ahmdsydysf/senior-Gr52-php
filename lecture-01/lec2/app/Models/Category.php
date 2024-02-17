<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];


    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_cat_id', 'id')
            ->withDefault(['name' => 'No PArent']);
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_cat_id', 'id');
    }
}
