<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TeamMember extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'position',
        'email',
        'phone',
        'website',
        'experience',
        'availability',
        'description',
        'image',
        'social_links_json',
        'skills_json',
        'is_active',
    ];

    protected $casts = [
        'social_links_json' => 'array',
        'skills_json' => 'array',
        'is_active' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */

    /**
     * Auto-generate slug from name when name is set.
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        
        if (empty($this->attributes['slug']) || $this->isDirty('name')) {
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
     * Set social links JSON - handle string input for textarea
     */
    public function setSocialLinksJsonAttribute($value)
    {
        if (is_string($value) && !empty($value)) {
            // Try to decode as JSON first
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $this->attributes['social_links_json'] = $value;
            } else {
                // If not valid JSON, store as is for manual editing
                $this->attributes['social_links_json'] = $value;
            }
        } else {
            $this->attributes['social_links_json'] = json_encode($value);
        }
    }

    /**
     * Set skills JSON - handle string input for textarea  
     */
    public function setSkillsJsonAttribute($value)
    {
        if (is_string($value) && !empty($value)) {
            // Try to decode as JSON first
            $decoded = json_decode($value, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $this->attributes['skills_json'] = $value;
            } else {
                // If not valid JSON, store as is for manual editing
                $this->attributes['skills_json'] = $value;
            }
        } else {
            $this->attributes['skills_json'] = json_encode($value);
        }
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /**
     * Get social links JSON as string for textarea display
     */
    public function getSocialLinksJsonForTextareaAttribute()
    {
        if (is_array($this->social_links_json)) {
            return json_encode($this->social_links_json, JSON_PRETTY_PRINT);
        }
        return $this->social_links_json ?? '';
    }

    /**
     * Get skills JSON as string for textarea display
     */
    public function getSkillsJsonForTextareaAttribute()
    {
        if (is_array($this->skills_json)) {
            return json_encode($this->skills_json, JSON_PRETTY_PRINT);
        }
        return $this->skills_json ?? '';
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Scope a query to only include active team members.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to filter by position.
     */
    public function scopeByPosition($query, $position)
    {
        return $query->where('position', 'like', '%' . $position . '%');
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
