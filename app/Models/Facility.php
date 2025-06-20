<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'features_list_json',
        'gallery_images_json',
        'is_active',
    ];

    protected $casts = [
        'features_list_json' => 'array',
        'gallery_images_json' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active facilities.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
