<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'price',
        'period',
        'location',
        'beds',
        'parlor',
        'kitchen',
        'bathroom',
        'description',
        'featured_image',
        'tag',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'beds' => 'integer',
        'parlor' => 'integer',
        'kitchen' => 'integer',
        'bathroom' => 'integer',
    ];

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    /**
     * Auto-generate slug from title when title is set.
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        
        if (empty($this->attributes['slug']) || $this->isDirty('title')) {
            $this->attributes['slug'] = Str::slug($value);
            
            // Handle duplicate slugs
            $originalSlug = $this->attributes['slug'];
            $counter = 1;
            
            while (static::where('slug', $this->attributes['slug'])
                        ->where('id', '!=', $this->id ?? 0)
                        ->exists()) {
                $this->attributes['slug'] = $originalSlug . '-' . $counter;
                $counter++;
            }
        }
    }



    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope a query to only include active properties.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to only include featured properties.
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope a query to filter by tag.
     */
    public function scopeByTag($query, $tag)
    {
        return $query->where('tag', $tag);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * Get the featured image URL with proper path handling
     */
    public function getFeaturedImageAttribute($value)
    {
        if (!$value) {
            return $value;
        }

        // If it's already a full URL or starts with assets/, return as is for asset() helper
        if (str_starts_with($value, 'http') || str_starts_with($value, 'assets/')) {
            return $value;
        }

        // If it's a storage file (uploaded file), return the relative path for storage() helper
        // This handles uploaded files that are stored in storage/app/public/
        return $value;
    }

    /**
     * Get the featured image URL for display purposes
     */
    public function getFeaturedImageUrlAttribute()
    {
        if (!$this->featured_image) {
            return null;
        }

        // If it starts with assets/, use asset helper
        if (str_starts_with($this->featured_image, 'assets/')) {
            return asset($this->featured_image);
        }

        // If it's an uploaded file, use storage helper
        return asset('storage/' . $this->featured_image);
    }

    /**
     * Get the featured image URL for display
     */
    public function getImageUrlAttribute()
    {
        if (!$this->featured_image) {
            return null;
        }

        // Handle asset images
        if (str_starts_with($this->featured_image, 'assets/')) {
            return asset($this->featured_image);
        }

        // Handle uploaded storage images
        return asset('storage/' . $this->featured_image);
    }

}
