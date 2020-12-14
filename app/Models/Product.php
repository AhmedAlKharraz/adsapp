<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id', 'category_id', 'subcategory_id', 'brand_id', 'city_id', 'area_id', 'warranty_id', 'age_id', 'condition_id', 'media_id', 'price', 'is_sold', 'is_listed'
    ];
}
