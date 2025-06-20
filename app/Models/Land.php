<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Land extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'price',
        'location',
        'area',
        'category',
        'land_type',
        'description',
        'featured_image',
        'tag',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
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
     * Scope a query to only include active lands.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to filter by category.
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Scope a query to filter by tag.
     */
    public function scopeByTag($query, $tag)
    {
        return $query->where('tag', $tag);
    }

    /**
     * Scope a query to filter by land type.
     */
    public function scopeByLandType($query, $landType)
    {
        return $query->where('land_type', $landType);
    }

    /**
     * Get lands grouped by category.
     */
    public static function getLandsByCategory()
    {
        return static::active()
            ->get()
            ->groupBy('category')
            ->toArray();
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

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
