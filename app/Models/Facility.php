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
        'image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope a query to only include active facilities.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get the image URL for display
     */
    public function getImageUrlAttribute()
    {
        if (!$this->image) {
            return null;
        }

        // Handle asset images
        if (str_starts_with($this->image, 'assets/')) {
            return asset($this->image);
        }

        // Handle uploaded storage images
        return asset('storage/' . $this->image);
    }
}
