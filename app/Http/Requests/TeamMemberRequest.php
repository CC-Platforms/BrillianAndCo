<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamMemberRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'website' => 'nullable|url|max:255',
            'experience' => 'nullable|string|max:255',
            'availability' => 'nullable|string|in:Full Time,Part Time,Consultant,Contract,Remote',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links_json' => 'nullable|string',
            'skills_json' => 'nullable|string',
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
            'name' => 'full name',
            'position' => 'position',
            'email' => 'email address',
            'phone' => 'phone number',
            'website' => 'website URL',
            'experience' => 'years of experience',
            'availability' => 'availability',
            'description' => 'bio/description',
            'image' => 'profile photo',
            'social_links_json' => 'social media links',
            'skills_json' => 'skills and expertise',
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
            'image.image' => 'The profile photo must be an image file.',
            'image.max' => 'The profile photo size must be less than 2MB.',
            'availability.in' => 'Please select a valid availability option.',
            'website.url' => 'Please enter a valid website URL.',
            'email.email' => 'Please enter a valid email address.',
        ];
    }
}
