<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'price',
        'price_period',
        'tag',
        'image',
        'beds',
        'bathrooms',
        'area'
    ];
}