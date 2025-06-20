<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TeamMemberRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TeamMemberCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TeamMemberCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\TeamMember::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/team-member');
        CRUD::setEntityNameStrings('team member', 'team members');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('image')->type('image')->label('Photo')
            ->height('80px')->width('80px')
            ->value(function($entry) {
                if (!$entry->image) return '';
                
                // Handle asset images (seeded data)
                if (str_starts_with($entry->image, 'assets/')) {
                    return asset($entry->image);
                }
                
                // Handle uploaded storage images - new withFiles() method stores full path
                if (str_starts_with($entry->image, 'uploads/')) {
                    return asset('storage/' . $entry->image);
                }
                
                // Fallback for any other format
                return asset('storage/' . $entry->image);
            });
        CRUD::column('name')->type('text')->label('Name');
        CRUD::column('position')->type('text')->label('Position');
        CRUD::column('phone')->type('text')->label('Phone');
        CRUD::column('email')->type('email')->label('Email');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TeamMemberRequest::class);

        // Basic Information Section
        CRUD::addField([
            'name' => 'section_basic',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary"><i class="la la-user"></i> Personal Information</h5><hr>'
        ]);

        CRUD::field('name')->type('text')->label('Full Name')
            ->hint('Enter the team member\'s full name')
            ->wrapper(['class' => 'form-group col-md-8']);

        CRUD::field('position')->type('text')->label('Position/Job Title')
            ->hint('e.g., CEO, Secretary, Real Estate Agent, Property Manager')
            ->wrapper(['class' => 'form-group col-md-4']);

        // Photo Section
        CRUD::addField([
            'name' => 'section_photo',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-camera"></i> Profile Photo</h5><hr>'
        ]);

        CRUD::field('image')->type('upload')->label('Profile Photo')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads/team-members',
                'deleteWhenEntryIsDeleted' => true,
            ])
            ->hint('Professional headshot (recommended: 400x400px, square format)')
            ->wrapper(['class' => 'form-group col-md-6']);

        // Contact Information Section
        CRUD::addField([
            'name' => 'section_contact',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-phone"></i> Contact Information</h5><hr>'
        ]);

        CRUD::field('email')->type('email')->label('Email Address')
            ->hint('Professional email address')
            ->wrapper(['class' => 'form-group col-md-4']);
        
        CRUD::field('phone')->type('text')->label('Phone Number')
            ->hint('e.g., +237 6XX XXX XXX')
            ->wrapper(['class' => 'form-group col-md-4']);
        
        CRUD::field('website')->type('url')->label('Personal Website')
            ->hint('Optional personal or professional website')
            ->wrapper(['class' => 'form-group col-md-4']);

        // Professional Information Section
        CRUD::addField([
            'name' => 'section_professional',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-briefcase"></i> Professional Details</h5><hr>'
        ]);

        CRUD::field('experience')->type('text')->label('Years of Experience')
            ->hint('e.g., 8 Years, 2+ Years, 10+ Years')
            ->wrapper(['class' => 'form-group col-md-6']);
        
        CRUD::field('availability')->type('select_from_array')->label('Availability')
            ->options([
                'Full Time' => 'Full Time',
                'Part Time' => 'Part Time',
                'Consultant' => 'Consultant',
                'Contract' => 'Contract',
                'Remote' => 'Remote'
            ])
            ->hint('Current working arrangement')
            ->wrapper(['class' => 'form-group col-md-6']);

        // Bio Section
        CRUD::addField([
            'name' => 'section_bio',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-file-text-o"></i> Biography</h5><hr>'
        ]);

        CRUD::field('description')->type('summernote')->label('Professional Biography')
            ->hint('Background, experience, specializations, achievements, and professional philosophy')
            ->options([
                'height' => 200,
                'toolbar' => [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            ]);

        // Social Media Section
        CRUD::addField([
            'name' => 'section_social',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-share-alt"></i> Social Media Links</h5><hr>'
        ]);

        CRUD::field('social_links_json')->type('textarea')->label('Social Media Profiles (JSON)')
            ->hint('Enter social media links in JSON format: {"facebook":"url","linkedin":"url","twitter":"url"}')
            ->attributes(['placeholder' => '{"facebook":"","linkedin":"","twitter":""}', 'rows' => 3])
            ->wrapper(['class' => 'form-group col-md-12']);

        // Skills Section
        CRUD::addField([
            'name' => 'section_skills',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-star"></i> Skills & Expertise</h5><hr>'
        ]);

        CRUD::field('skills_json')->type('textarea')->label('Professional Skills (JSON)')
            ->hint('Enter skills in JSON format: [{"title":"Property Valuation","value":90},{"title":"Client Relations","value":85}]')
            ->attributes(['placeholder' => '[{"title":"","value":0}]', 'rows' => 3])
            ->wrapper(['class' => 'form-group col-md-12']);

        // Status Section
        CRUD::addField([
            'name' => 'section_status',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-toggle-on"></i> Status</h5><hr>'
        ]);

        CRUD::field('is_active')->type('switch')->label('Active Team Member')
            ->default(true)
            ->hint('Show this team member on the website')
            ->wrapper(['class' => 'form-group col-md-6']);
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    /**
     * Define what happens when the Delete operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-delete
     * @return void
     */
    protected function setupDeleteOperation()
    {
        // Configure the upload field for automatic file deletion
        CRUD::field('image')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads/team-members',
            'deleteWhenEntryIsDeleted' => true,
        ]);
    }

    /**
     * Define what happens when the Show operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-show
     * @return void
     */
    protected function setupShowOperation()
    {
        // Personal Information
        CRUD::column('image')->type('image')->label('Photo')
            ->height('200px')->width('200px')
            ->value(function($entry) {
                if (!$entry->image) return '';
                
                // Handle asset images (seeded data)
                if (str_starts_with($entry->image, 'assets/')) {
                    return asset($entry->image);
                }
                
                // Handle uploaded storage images - new withFiles() method stores full path
                if (str_starts_with($entry->image, 'uploads/')) {
                    return asset('storage/' . $entry->image);
                }
                
                // Fallback for any other format
                return asset('storage/' . $entry->image);
            });
        
        CRUD::column('name')->type('text')->label('Full Name');
        CRUD::column('position')->type('text')->label('Position');
        
        // Contact Information
        CRUD::column('email')->type('email')->label('Email Address');
        CRUD::column('phone')->type('text')->label('Phone Number');
        CRUD::column('website')->type('url')->label('Website');
        
        // Professional Details
        CRUD::column('experience')->type('text')->label('Experience');
        CRUD::column('availability')->type('text')->label('Availability');
        CRUD::column('description')->type('textarea')->label('Biography');
        
        // Social Media & Skills
        CRUD::column('social_links_json')->type('text')->label('Social Media Links');
        CRUD::column('skills_json')->type('text')->label('Professional Skills');
        
        // Status & Timestamps
        CRUD::column('is_active')->type('boolean')->label('Active');
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
