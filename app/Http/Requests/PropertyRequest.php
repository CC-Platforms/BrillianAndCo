<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'period' => 'nullable|string|max:255',
            'location' => 'required|string|max:255',
            'beds' => 'nullable|integer|min:0|max:20',
            'parlor' => 'nullable|integer|min:0|max:10',
            'kitchen' => 'nullable|integer|min:0|max:10',
            'bathroom' => 'nullable|integer|min:0|max:20',
            'description' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'nullable|string|in:New,Featured,Premium,Hot Deal',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'property title',
            'price' => 'price',
            'period' => 'rental period',
            'location' => 'location',
            'beds' => 'number of bedrooms',
            'parlor' => 'number of parlors',
            'kitchen' => 'number of kitchens',
            'bathroom' => 'number of bathrooms',
            'description' => 'property description',
            'featured_image' => 'featured image',
            'tag' => 'property tag',
            'is_featured' => 'featured status',
            'is_active' => 'active status',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'featured_image.image' => 'The featured image must be an image file.',
            'featured_image.max' => 'The featured image size must be less than 2MB.',
        ];
    }
}
