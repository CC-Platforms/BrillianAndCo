<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PropertyRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PropertyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PropertyCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Property::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/property');
        CRUD::setEntityNameStrings('property', 'properties');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('featured_image')->type('image')->label('Featured Image')
            ->height('120px')->width('160px')
            ->value(function($entry) {
                if (!$entry->featured_image) return '';
                
                // Handle asset images (seeded data)
                if (str_starts_with($entry->featured_image, 'assets/')) {
                    return asset($entry->featured_image);
                }
                
                // Handle uploaded storage images - new withFiles() method stores full path
                if (str_starts_with($entry->featured_image, 'uploads/')) {
                    return asset('storage/' . $entry->featured_image);
                }
                
                // Fallback for any other format
                return asset('storage/' . $entry->featured_image);
            });
        CRUD::column('title')->type('text')->label('Property Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price');
        CRUD::column('period')->type('text')->label('Period');
        CRUD::column('beds')->type('number')->label('Beds');
        CRUD::column('parlor')->type('number')->label('Parlor');
        CRUD::column('kitchen')->type('number')->label('Kitchen');
        CRUD::column('bathroom')->type('number')->label('Bathroom');
        CRUD::column('tag')->type('text')->label('Tag');
        CRUD::column('is_featured')->type('boolean')->label('Featured');
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
        CRUD::setValidation(PropertyRequest::class);

        // Basic Information Section
        CRUD::addField([
            'name' => 'section_basic',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary"><i class="la la-home"></i> Property Information</h5><hr>'
        ]);

        CRUD::field('title')->type('text')->label('Property Title')
            ->hint('Enter a descriptive title for the property')
            ->wrapper(['class' => 'form-group col-md-12']);

        // Location and Pricing Section
        CRUD::addField([
            'name' => 'section_location',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-map-marker"></i> Location & Pricing</h5><hr>'
        ]);

        CRUD::field('location')->type('text')->label('Location')
            ->hint('e.g., Molyko, Buea, South West Region, Cameroon')
            ->wrapper(['class' => 'form-group col-md-6']);
        
        CRUD::field('price_numeric')->type('number')->label('Price')
            ->hint('Enter amount in XAF (currency will be added automatically)')
            ->attributes(['placeholder' => '100000', 'min' => '0', 'step' => '1'])
            ->suffix(' XAF')
            ->wrapper(['class' => 'form-group col-md-3']);
        
        CRUD::field('period')->type('select_from_array')->label('Period')
            ->options([
                'Month' => 'Month',
                'Year' => 'Year',
                'Sale' => 'Sale (One-time)',
                'Week' => 'Week',
                'Day' => 'Day'
            ])
            ->hint('Rental period or sale type')
            ->wrapper(['class' => 'form-group col-md-3']);

        // Property Details Section
        CRUD::addField([
            'name' => 'section_details',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-bed"></i> Property Details</h5><hr>'
        ]);

        CRUD::field('beds')->type('number')->label('Bedrooms')
            ->attributes(['min' => 0, 'max' => 20, 'step' => 1])
            ->default(1)
            ->wrapper(['class' => 'form-group col-md-3']);
        
        CRUD::field('parlor')->type('number')->label('Parlor')
            ->attributes(['min' => 0, 'max' => 10, 'step' => 1])
            ->default(1)
            ->hint('Number of parlors/living rooms')
            ->wrapper(['class' => 'form-group col-md-3']);
        
        CRUD::field('kitchen')->type('number')->label('Kitchen')
            ->attributes(['min' => 0, 'max' => 10, 'step' => 1])
            ->default(1)
            ->hint('Number of kitchens')
            ->wrapper(['class' => 'form-group col-md-3']);
        
        CRUD::field('bathroom')->type('number')->label('Bathroom')
            ->attributes(['min' => 0, 'max' => 20, 'step' => 1])
            ->default(1)
            ->hint('Number of bathrooms')
            ->wrapper(['class' => 'form-group col-md-3']);

        // Images Section
        CRUD::addField([
            'name' => 'section_images',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-camera"></i> Property Images</h5><hr>'
        ]);

        CRUD::field('featured_image')->type('upload')->label('Featured Image')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads/properties',
                'deleteWhenEntryIsDeleted' => true,
            ])
            ->hint('Main property image (recommended: 800x450px)')
            ->wrapper(['class' => 'form-group col-md-12']);

        // Content Section
        CRUD::addField([
            'name' => 'section_content',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-file-text-o"></i> Description</h5><hr>'
        ]);

        CRUD::field('description')->type('summernote')->label('Property Description')
            ->hint('Detailed description of the property, amenities, and surroundings')
            ->options([
                'height' => 250,
                'toolbar' => [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            ]);

        // Categorization Section
        CRUD::addField([
            'name' => 'section_categorization',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-tags"></i> Categorization & Status</h5><hr>'
        ]);

        CRUD::field('tag')->type('select_from_array')->label('Property Tag')
            ->options([
                'New' => 'New Listing',
                'Featured' => 'Featured Property', 
                'Premium' => 'Premium Property',
                'Hot Deal' => 'Hot Deal'
            ])
            ->allows_null(true)
            ->hint('Special tag to highlight this property')
            ->wrapper(['class' => 'form-group col-md-4']);

        CRUD::field('is_featured')->type('switch')->label('Featured Property')
            ->hint('Show in featured properties section')
            ->wrapper(['class' => 'form-group col-md-4']);

        CRUD::field('is_active')->type('switch')->label('Active Listing')
            ->default(true)
            ->hint('Enable/disable this property listing')
            ->wrapper(['class' => 'form-group col-md-4']);
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
        CRUD::field('featured_image')->type('upload')->withFiles([
            'disk' => 'public',
            'path' => 'uploads/properties',
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
        // Basic Information
        CRUD::column('title')->type('text')->label('Property Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price (XAF)');
        CRUD::column('period')->type('text')->label('Period');
        
        // Property Details
        CRUD::column('beds')->type('number')->label('Bedrooms');
        CRUD::column('parlor')->type('number')->label('Parlor');
        CRUD::column('kitchen')->type('number')->label('Kitchen');
        CRUD::column('bathroom')->type('number')->label('Bathroom');
        CRUD::column('description')->type('summernote')->label('Description');
        
        // Images
        CRUD::column('featured_image')->type('image')->label('Featured Image')
            ->height('300px')->width('400px')
            ->value(function($entry) {
                if (!$entry->featured_image) return '';
                
                // Handle asset images (seeded data)
                if (str_starts_with($entry->featured_image, 'assets/')) {
                    return asset($entry->featured_image);
                }
                
                // Handle uploaded storage images - new withFiles() method stores full path
                if (str_starts_with($entry->featured_image, 'uploads/')) {
                    return asset('storage/' . $entry->featured_image);
                }
                
                // Fallback for any other format
                return asset('storage/' . $entry->featured_image);
            });
        
        // Status and Tags
        CRUD::column('tag')->type('text')->label('Tag');
        CRUD::column('is_featured')->type('boolean')->label('Featured Property');
        CRUD::column('is_active')->type('boolean')->label('Active Listing');
        
        // Timestamps
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
