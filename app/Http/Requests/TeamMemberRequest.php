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
            'availability' => 'nullable|string|in:Full Time,Part Time,Consultant',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'social_links_json' => 'nullable|array',
            'social_links_json.*.platform' => 'required|string|in:facebook,twitter,linkedin,instagram,tiktok',
            'social_links_json.*.url' => 'required|url',
            'skills_json' => 'nullable|array',
            'skills_json.*.title' => 'required|string|max:255',
            'skills_json.*.value' => 'required|integer|min:0|max:100',
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
            'social_links_json.*.platform.required' => 'Each social media link must have a platform selected.',
            'social_links_json.*.url.required' => 'Each social media link must have a URL.',
            'social_links_json.*.url.url' => 'Each social media URL must be a valid URL.',
            'skills_json.*.title.required' => 'Each skill must have a title.',
            'skills_json.*.value.required' => 'Each skill must have a proficiency value.',
            'skills_json.*.value.max' => 'Skill proficiency cannot exceed 100%.',
        ];
    }
}
