<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandRequest extends FormRequest
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
            'price_numeric' => 'required|numeric|min:1',
            'location' => 'required|string|max:255',
            'area_numeric' => 'required|numeric|min:1',
            'category' => 'required|string|in:Fast Selling Lands,Developed Lands,Fast Developing Lands,Architecture',
            'description' => 'required|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tag' => 'nullable|string|in:Featured,New,Premium,Hot Deal,Investment,Architectural,Design Ready',
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
            'title' => 'land title',
            'price_numeric' => 'price',
            'location' => 'location',
            'area_numeric' => 'land area',
            'category' => 'category',
            'description' => 'land description',
            'featured_image' => 'featured image',
            'tag' => 'land tag',
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
            'price_numeric.required' => 'The price field is required.',
            'price_numeric.numeric' => 'The price must be a valid number.',
            'price_numeric.min' => 'The price must be at least 1 XAF.',
            'area_numeric.required' => 'The land area field is required.',
            'area_numeric.numeric' => 'The land area must be a valid number.',
            'area_numeric.min' => 'The land area must be at least 1 m².',
            'featured_image.image' => 'The featured image must be an image file.',
            'featured_image.max' => 'The featured image size must be less than 2MB.',
            'category.in' => 'Please select a valid category.',
            'tag.in' => 'Please select a valid tag.',
        ];
    }
}
