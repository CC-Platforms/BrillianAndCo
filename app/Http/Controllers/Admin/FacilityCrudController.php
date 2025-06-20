<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FacilityRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class FacilityCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class FacilityCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Facility::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/facility');
        CRUD::setEntityNameStrings('facility', 'facilities');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title')->type('text')->label('Facility Title');
        CRUD::column('subtitle')->type('text')->label('Subtitle');
        CRUD::column('description')->type('text')->limit(100)->label('Description');
        CRUD::column('is_active')->type('boolean')->label('Active');
        CRUD::column('created_at')->type('datetime')->label('Created');
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(FacilityRequest::class);

        // Basic Information Section
        CRUD::addField([
            'name' => 'section_basic',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary"><i class="la la-building"></i> Facility Information</h5><hr>'
        ]);

        CRUD::field('title')->type('text')->label('Facility Title')
            ->hint('Main title for this facility (e.g., "Modern Office Spaces", "Luxury Amenities")')
            ->wrapper(['class' => 'form-group col-md-8']);

        CRUD::field('subtitle')->type('text')->label('Subtitle')
            ->hint('Supporting subtitle or tagline')
            ->wrapper(['class' => 'form-group col-md-4']);

        // Description Section
        CRUD::addField([
            'name' => 'section_description',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-file-text-o"></i> Description</h5><hr>'
        ]);

        CRUD::field('description')->type('summernote')->label('Facility Description')
            ->hint('Detailed description of the facility, its purpose, and benefits')
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

        // Features Section
        CRUD::addField([
            'name' => 'section_features',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-list"></i> Features List</h5><hr>'
        ]);

        CRUD::field('features_list_json')->type('repeatable')->label('Facility Features')
            ->hint('Add specific features and amenities offered by this facility')
            ->subfields([
                [
                    'name' => 'feature',
                    'type' => 'text',
                    'label' => 'Feature Name',
                    'hint' => 'e.g., 24/7 Security, High-Speed Internet, Parking Space',
                    'wrapper' => ['class' => 'form-group col-md-8']
                ],
                [
                    'name' => 'icon',
                    'type' => 'select_from_array',
                    'label' => 'Icon',
                    'options' => [
                        'la-shield' => 'Security',
                        'la-wifi' => 'WiFi/Internet',
                        'la-car' => 'Parking',
                        'la-swimming-pool' => 'Pool',
                        'la-dumbbell' => 'Gym/Fitness',
                        'la-utensils' => 'Restaurant/Food',
                        'la-coffee' => 'Cafe/Coffee',
                        'la-snowflake' => 'Air Conditioning',
                        'la-elevator' => 'Elevator',
                        'la-video' => 'CCTV/Surveillance',
                        'la-leaf' => 'Garden/Green Space',
                        'la-users' => 'Conference Room',
                        'la-tools' => 'Maintenance',
                        'la-lock' => 'Secure Access'
                    ],
                    'wrapper' => ['class' => 'form-group col-md-4']
                ]
            ]);

        // Images Section
        CRUD::addField([
            'name' => 'section_images',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-camera"></i> Facility Images</h5><hr>'
        ]);

        CRUD::field('gallery_images_json')->type('upload_multiple')->label('Facility Gallery')
            ->upload(true)
            ->disk('public')
            ->hint('Upload multiple images showcasing the facility (max 15 images, 2MB each)')
            ->wrapper(['class' => 'form-group col-md-12']);

        // Status Section
        CRUD::addField([
            'name' => 'section_status',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-toggle-on"></i> Status</h5><hr>'
        ]);

        CRUD::field('is_active')->type('switch')->label('Active Facility')
            ->default(true)
            ->hint('Show this facility on the website')
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
     * Define what happens when the Show operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-show
     * @return void
     */
    protected function setupShowOperation()
    {
        // Basic Information
        CRUD::column('title')->type('text')->label('Facility Title');
        CRUD::column('subtitle')->type('text')->label('Subtitle');
        CRUD::column('description')->type('summernote')->label('Description');
        
        // Features (display as formatted list)
        CRUD::column('features_list_json')->type('text')->label('Features')
            ->value(function($entry) {
                if (empty($entry->features_list_json)) return 'No features listed';
                $features = [];
                foreach ($entry->features_list_json as $feature) {
                    $features[] = ($feature['feature'] ?? 'Unknown Feature') . ' (' . ($feature['icon'] ?? 'no icon') . ')';
                }
                return implode('<br>', $features);
            })->escaped(false);
        
        // Images
        CRUD::column('gallery_images_json')->type('upload_multiple')->label('Facility Gallery');
        
        // Status
        CRUD::column('is_active')->type('boolean')->label('Active Facility');
        
        // Timestamps
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
