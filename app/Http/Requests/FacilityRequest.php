<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacilityRequest extends FormRequest
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
            'subtitle' => 'nullable|string|max:255',
            'description' => 'required|string',
            'features_list_json' => 'nullable|array',
            'features_list_json.*.feature' => 'required|string|max:255',
            'features_list_json.*.icon' => 'required|string',
            'gallery_images_json' => 'nullable|array',
            'gallery_images_json.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'title' => 'facility title',
            'subtitle' => 'subtitle',
            'description' => 'facility description',
            'features_list_json' => 'features list',
            'gallery_images_json' => 'gallery images',
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
            'gallery_images_json.*.image' => 'All gallery images must be image files.',
            'gallery_images_json.*.max' => 'Each gallery image size must be less than 2MB.',
            'features_list_json.*.feature.required' => 'Each feature must have a name.',
            'features_list_json.*.icon.required' => 'Each feature must have an icon selected.',
        ];
    }
}
