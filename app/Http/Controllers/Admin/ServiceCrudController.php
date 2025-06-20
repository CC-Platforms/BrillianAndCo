<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServiceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ServiceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ServiceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Service::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/service');
        CRUD::setEntityNameStrings('service', 'services');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title')->type('text')->label('Service Title');
        CRUD::column('icon')->type('text')->label('Icon Class');
        CRUD::column('description')->type('text')->limit(100)->label('Short Description');
        CRUD::column('is_active')->type('boolean')->label('Active');
        CRUD::column('sort_order')->type('number')->label('Sort Order');
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
        CRUD::setValidation(ServiceRequest::class);

        // Basic Information Section
        CRUD::addField([
            'name' => 'section_basic',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary"><i class="la la-info-circle"></i> Basic Information</h5><hr>'
        ]);

        CRUD::field('title')->type('text')->label('Service Title')
            ->wrapper(['class' => 'form-group col-md-8']);
        
        CRUD::field('sort_order')->type('number')->label('Sort Order')->default(0)
            ->hint('Lower numbers appear first')
            ->wrapper(['class' => 'form-group col-md-4']);

        // Icon Selection with Visual Picker
        CRUD::field('icon')->type('select_from_array')->label('Service Icon')
            ->options([
                'flaticon-buildings' => 'Buildings',
                'flaticon-house' => 'House',
                'flaticon-home' => 'Home', 
                'flaticon-property' => 'Property',
                'flaticon-location-pin' => 'Location',
                'flaticon-sale' => 'Sale',
                'flaticon-key' => 'Key',
                'flaticon-management' => 'Management',
                'flaticon-building' => 'Building',
                'flaticon-excavator' => 'Construction',
                'flaticon-interior-design' => 'Interior Design',
                'flaticon-business-and-trade' => 'Business & Trade',
                'flaticon-map' => 'Map/Location',
            ])
            ->hint('Choose an icon that represents this service')
            ->wrapper(['class' => 'form-group col-md-6']);

        // Content Section
        CRUD::addField([
            'name' => 'section_content',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-file-text-o"></i> Content</h5><hr>'
        ]);

        CRUD::field('description')->type('textarea')->label('Short Description')
            ->hint('Brief description for service cards (max 200 characters)')
            ->attributes(['maxlength' => 200, 'rows' => 3]);
        
        CRUD::field('full_description')->type('summernote')->label('Full Description')
            ->hint('Complete service description with HTML formatting')
            ->options([
                'height' => 300,
                'toolbar' => [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            ]);

        // Status Section
        CRUD::addField([
            'name' => 'section_status',
            'type' => 'custom_html',
            'value' => '<h5 class="text-primary mt-4"><i class="la la-toggle-on"></i> Status</h5><hr>'
        ]);

        CRUD::field('is_active')->type('switch')->label('Active Service')
            ->default(true)
            ->hint('Toggle to enable/disable this service')
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
        CRUD::column('title')->type('text')->label('Service Title');
        CRUD::column('icon')->type('text')->label('Icon Class');
        CRUD::column('description')->type('textarea')->label('Short Description');
        CRUD::column('full_description')->type('summernote')->label('Full Description');
        
        // Status and Order
        CRUD::column('is_active')->type('boolean')->label('Active Service');
        CRUD::column('sort_order')->type('number')->label('Sort Order');
        
        // Timestamps
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
