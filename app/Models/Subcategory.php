<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = [
        'subcategory_ar', 'subcategory_en', 'subcategory_image',
    ];
}
