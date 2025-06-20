<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LandRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class LandCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LandCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Land::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/land');
        CRUD::setEntityNameStrings('land', 'lands');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('featured_image')->type('text')->label('Main Land Image');
        CRUD::column('title')->type('text')->label('Land Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price');
        CRUD::column('area')->type('text')->label('Area');
        CRUD::column('category')->type('text')->label('Category');
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
        CRUD::setValidation(LandRequest::class);

        // Basic Information Section
        CRUD::addField([
            'name' => 'section_basic',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary"><i class="la la-map"></i> Land Information</h5><hr>'
        ]);

        CRUD::field('title')->type('text')->label('Land Title')
            ->hint('Enter a descriptive title for the land parcel')
            ->wrapper(['class' => 'form-group col-md-12']);

        // Location and Pricing Section
        CRUD::addField([
            'name' => 'section_location',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-map-marker"></i> Location & Pricing</h5><hr>'
        ]);

        CRUD::field('location')->type('text')->label('Location')
            ->hint('e.g., Molyko, Buea, South West Region, Cameroon')
            ->wrapper(['class' => 'form-group col-md-8']);
        
        CRUD::field('price')->type('text')->label('Price (XAF)')
            ->hint('e.g., 8,500,000 or 15,000,000')
            ->attributes(['placeholder' => '8,500,000'])
            ->wrapper(['class' => 'form-group col-md-4']);

        // Land Details Section
        CRUD::addField([
            'name' => 'section_details',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-expand"></i> Land Specifications</h5><hr>'
        ]);

        CRUD::field('area')->type('text')->label('Land Area')
            ->hint('e.g., 400 m², 800 m² (20m x 40m), 1,200 sq ft')
            ->attributes(['placeholder' => '400 m²'])
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('category')->type('select_from_array')->label('Land Category')
            ->options([
                'Fast Selling Lands' => 'Fast Selling Lands',
                'Developed Lands' => 'Developed Lands', 
                'Fast Developing Lands' => 'Fast Developing Lands',
                'Architecture' => 'Architecture'
            ])
            ->hint('Select the most appropriate category')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('land_type')->type('select_from_array')->label('Land Type')
            ->options([
                'Residential' => 'Residential',
                'Commercial' => 'Commercial',
                'Industrial' => 'Industrial',
                'Agricultural' => 'Agricultural',
                'Mixed Use' => 'Mixed Use',
                'Vacant' => 'Vacant Land'
            ])
            ->allows_null(true)
            ->hint('Specify the intended use or zoning type')
            ->wrapper(['class' => 'form-group col-md-6']);

        // Images Section
        CRUD::addField([
            'name' => 'section_images',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-camera"></i> Land Images</h5><hr>'
        ]);

        CRUD::field('featured_image')->type('upload')->label('Main Land Image')
            ->upload(true)
            ->disk('public')
            ->hint('Main land image (recommended: 800x450px)')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('gallery_images_json')->type('textarea')->label('Land Gallery Images')
            ->hint('Enter image URLs separated by commas, or upload via file manager')
            ->value(function($entry) {
                if ($entry->gallery_images_json && is_array($entry->gallery_images_json)) {
                    return implode(', ', $entry->gallery_images_json);
                }
                return $entry->gallery_images_json ?? '';
            })
            ->wrapper(['class' => 'form-group col-md-6']);

        // Content Section
        CRUD::addField([
            'name' => 'section_content',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-file-text-o"></i> Description</h5><hr>'
        ]);

        CRUD::field('description')->type('summernote')->label('Land Description')
            ->hint('Detailed description: topography, access roads, utilities, development potential, legal status')
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
            'value' => '<h5 class="text-primary mt-4"><i class="la la-tags"></i> Tags & Status</h5><hr>'
        ]);

        CRUD::field('tag')->type('select_from_array')->label('Land Tag')
            ->options([
                'Featured' => 'Featured Land',
                'New' => 'New Listing',
                'Premium' => 'Premium Location',
                'Hot Deal' => 'Hot Deal',
                'Investment' => 'Investment Opportunity',
                'Architectural' => 'Ready for Architecture',
                'Design Ready' => 'Design Ready'
            ])
            ->allows_null(true)
            ->hint('Special tag to highlight this land')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('is_active')->type('switch')->label('Active Listing')
            ->default(true)
            ->hint('Enable/disable this land listing')
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
        CRUD::column('title')->type('text')->label('Land Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price (XAF)');
        CRUD::column('area')->type('text')->label('Land Area');
        CRUD::column('category')->type('text')->label('Category');
        CRUD::column('land_type')->type('text')->label('Land Type');
        
        // Description
        CRUD::column('description')->type('summernote')->label('Description');
        
        // Images
        CRUD::column('featured_image')->type('text')->label('Main Land Image');
        CRUD::column('gallery_images_json')->type('json')->label('Land Gallery');
        
        // Status and Tags
        CRUD::column('tag')->type('text')->label('Tag');
        CRUD::column('is_active')->type('boolean')->label('Active Listing');
        
        // Timestamps
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
