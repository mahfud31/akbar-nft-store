<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'categories_id', 'price', 'photos', 'link_redirect', 'description', 'slug'
    ];

    protected $hidden = [

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
