<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    protected $fillable = [
        'processor_ar', 'processor_en',
    ];
}
