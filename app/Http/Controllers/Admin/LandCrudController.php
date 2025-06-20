<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LandRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Prologue\Alerts\Facades\Alert;

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
        CRUD::column('title')->type('text')->label('Land Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price');
        CRUD::column('area')->type('text')->label('Area');
        CRUD::column('category')->type('text')->label('Category');
        CRUD::column('tag')->type('text')->label('Tag');
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
            ->hint('e.g., Casmic, Buea, Cameroon')
            ->wrapper(['class' => 'form-group col-md-8']);
        
        CRUD::field('price_numeric')->type('number')->label('Price')
            ->hint('Enter amount in XAF (currency will be added automatically)')
            ->attributes(['placeholder' => '8500000', 'min' => '0', 'step' => '1'])
            ->suffix(' XAF')
            ->wrapper(['class' => 'form-group col-md-4']);

        // Land Details Section
        CRUD::addField([
            'name' => 'section_details',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-expand"></i> Land Specifications</h5><hr>'
        ]);

        CRUD::field('area_numeric')->type('number')->label('Land Area')
            ->hint('Enter area in square meters (m² will be added automatically)')
            ->attributes(['placeholder' => '400', 'min' => '1', 'step' => '1'])
            ->suffix(' m²')
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

        CRUD::field('featured_image')->type('upload')->label('Featured Image')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads/lands',
                'deleteWhenEntryIsDeleted' => true,
            ])
            ->hint('Main land image (recommended: 800x450px)')
            ->wrapper(['class' => 'form-group col-md-12']);

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
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $this->crud->hasAccessOrFail('create');
        
        // Execute the FormRequest authorization and validation
        $request = $this->crud->validateRequest();
        
        // Manually handle the virtual fields
        $data = $request->all();
        
        // Handle price_numeric -> price conversion
        if (isset($data['price_numeric']) && is_numeric($data['price_numeric'])) {
            $data['price'] = number_format($data['price_numeric'], 0, '.', ',') . ' XAF';
            unset($data['price_numeric']);
        }
        
        // Handle area_numeric -> area conversion  
        if (isset($data['area_numeric']) && is_numeric($data['area_numeric'])) {
            $data['area'] = $data['area_numeric'] . ' m²';
            unset($data['area_numeric']);
        }
        
        // Insert the entry in the database
        $item = $this->crud->create($data);
        $this->data['entry'] = $this->crud->entry = $item;
        
        // Show a success message
        Alert::success(trans('backpack::crud.insert_success'))->flash();
        
        // Save the redirect choice for next time
        $this->crud->setSaveAction();
        
        return $this->crud->performSaveAction($item->getKey());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        $this->crud->hasAccessOrFail('update');
        
        // Execute the FormRequest authorization and validation
        $request = $this->crud->validateRequest();
        
        // Manually handle the virtual fields
        $data = $request->all();
        
        // Handle price_numeric -> price conversion
        if (isset($data['price_numeric']) && is_numeric($data['price_numeric'])) {
            $data['price'] = number_format($data['price_numeric'], 0, '.', ',') . ' XAF';
            unset($data['price_numeric']);
        }
        
        // Handle area_numeric -> area conversion
        if (isset($data['area_numeric']) && is_numeric($data['area_numeric'])) {
            $data['area'] = $data['area_numeric'] . ' m²';
            unset($data['area_numeric']);
        }
        
        // Update the entry in the database
        $item = $this->crud->update($request->get($this->crud->model->getKeyName()), $data);
        $this->data['entry'] = $this->crud->entry = $item;
        
        // Show a success message
        Alert::success(trans('backpack::crud.update_success'))->flash();
        
        // Save the redirect choice for next time
        $this->crud->setSaveAction();
        
        return $this->crud->performSaveAction($item->getKey());
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
            'path' => 'uploads/lands',
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
        CRUD::column('title')->type('text')->label('Land Title');
        CRUD::column('location')->type('text')->label('Location');
        CRUD::column('price')->type('text')->label('Price');
        CRUD::column('area')->type('text')->label('Area');
        CRUD::column('category')->type('text')->label('Category');
        CRUD::column('land_type')->type('text')->label('Land Type');
        CRUD::column('description')->type('summernote')->label('Description');
        
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
        
        CRUD::column('tag')->type('text')->label('Tag');
        CRUD::column('is_active')->type('boolean')->label('Active Listing');
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
