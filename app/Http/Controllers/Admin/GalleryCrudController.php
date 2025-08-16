<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class GalleryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Gallery::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/gallery');
        CRUD::setEntityNameStrings('gallery', 'galleries');
    }

    protected function setupListOperation()
    {
        CRUD::setOperationSetting('searchLogic', false);

        CRUD::addColumn([
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text'
        ]);

        CRUD::addColumn([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'text',
            'limit' => 100,
        ]);

        CRUD::addColumn([
            'name'   => 'image',
            'label'  => 'Image',
            'type'   => 'image',
            'prefix' => 'storage/',
            'height' => '60px',
            'width'  => '60px',
        ]);

        CRUD::addColumn([
            'name'  => 'created_at',
            'label' => 'Created At',
            'type'  => 'datetime',
        ]);

        // ✅ make sure pagination & ajax works properly
        CRUD::setDefaultPageLength(10);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        CRUD::addField([
            'name'  => 'title',
            'label' => 'Title',
            'type'  => 'text',
        ]);

        CRUD::addField([
            'name'  => 'description',
            'label' => 'Description',
            'type'  => 'textarea',
        ]);

        CRUD::addField([
            'name'   => 'image',
            'label'  => 'Image',
            'type'   => 'upload',
            'upload' => true,
            'disk'   => 'public',
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
        
        CRUD::setValidation([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }
}