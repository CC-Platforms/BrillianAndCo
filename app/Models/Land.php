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
        'price_numeric',
        'location',
        'area',
        'area_numeric',
        'category',
        'land_type',
        'description',
        'featured_image',
        'tag',
        'is_active',
    ];

    protected $appends = ['price_numeric', 'area_numeric'];

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
     * Handle the virtual price_numeric field
     */
    public function setPriceNumericAttribute($value)
    {
        if (is_numeric($value) && $value > 0) {
            $this->attributes['price'] = number_format($value, 0, '.', ',') . ' XAF';
        }
    }

    /**
     * Handle the virtual area_numeric field
     */
    public function setAreaNumericAttribute($value)
    {
        if (is_numeric($value) && $value > 0) {
            $this->attributes['area'] = $value . ' m²';
        }
    }

    /**
     * Automatically add XAF currency to price when saving
     */
    public function setPriceAttribute($value)
    {
        // If it's a number (from form), add XAF
        if (is_numeric($value)) {
            $this->attributes['price'] = number_format($value, 0, '.', ',') . ' XAF';
        } else {
            // If it already has XAF or is a string, keep as is
            $this->attributes['price'] = $value;
        }
    }

    /**
     * Automatically add m² to area when saving
     */
    public function setAreaAttribute($value)
    {
        // If it's a number (from form), add m²
        if (is_numeric($value)) {
            $this->attributes['area'] = $value . ' m²';
        } else {
            // If it already has m² or is a complex string, keep as is
            $this->attributes['area'] = $value;
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

    /**
     * Get numeric price value (without XAF) for editing
     */
    public function getPriceNumericAttribute()
    {
        if (!$this->attributes['price'] ?? null) return null;
        
        // Extract numbers from price string
        $numeric = preg_replace('/[^0-9]/', '', $this->attributes['price']);
        return $numeric ? (int)$numeric : null;
    }

    /**
     * Get numeric area value (without m²) for editing
     */
    public function getAreaNumericAttribute()
    {
        if (!$this->attributes['area'] ?? null) return null;
        
        // Extract the first number from area string
        preg_match('/(\d+)/', $this->attributes['area'], $matches);
        return isset($matches[1]) ? (int)$matches[1] : null;
    }

}
