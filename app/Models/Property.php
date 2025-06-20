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
        'bathrooms',
        'description',
        'featured_image',
        'gallery_images_json',
        'tag',
        'is_featured',
        'is_active',
    ];

    protected $casts = [
        'gallery_images_json' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'beds' => 'integer',
        'bathrooms' => 'integer',
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
     * Set gallery images JSON - convert string to array when saving
     */
    public function setGalleryImagesJsonAttribute($value)
    {
        if (is_string($value)) {
            // If it's a comma-separated string, convert to array
            $images = array_map('trim', explode(',', $value));
            $images = array_filter($images); // Remove empty values
            $this->attributes['gallery_images_json'] = json_encode($images);
        } else {
            $this->attributes['gallery_images_json'] = json_encode($value);
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
     * Get gallery images JSON - convert array to string for textarea display
     */
    public function getGalleryImagesJsonForTextareaAttribute()
    {
        if (is_array($this->gallery_images_json)) {
            return implode(', ', $this->gallery_images_json);
        }
        return $this->gallery_images_json ?? '';
    }
}
