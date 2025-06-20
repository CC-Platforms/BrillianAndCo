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
        CRUD::column('image')->type('image')->label('Facility Image')
            ->height('120px')->width('160px')
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
        CRUD::column('title')->type('text')->label('Facility Title');
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

        CRUD::field('title')->type('text')->label('Facility Title')
            ->hint('Enter the facility name')
            ->wrapper(['class' => 'form-group col-md-8']);

        CRUD::field('image')->type('upload')->label('Facility Image')
            ->withFiles([
                'disk' => 'public',
                'path' => 'uploads/facilities',
                'deleteWhenEntryIsDeleted' => true,
            ])
            ->hint('Upload facility image (recommended: 800x600px)')
            ->wrapper(['class' => 'form-group col-md-4']);

        CRUD::field('is_active')->type('switch')->label('Active')
            ->default(true)
            ->hint('Show this facility on the website')
            ->wrapper(['class' => 'form-group col-md-12']);
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
            'path' => 'uploads/facilities',
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
        CRUD::column('title')->type('text')->label('Facility Title');
        CRUD::column('image')->type('image')->label('Facility Image')
            ->height('300px')->width('400px')
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
        CRUD::column('is_active')->type('boolean')->label('Active');
        CRUD::column('created_at')->type('datetime')->label('Created At');
        CRUD::column('updated_at')->type('datetime')->label('Updated At');
    }
}
