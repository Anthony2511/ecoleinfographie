<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\WorkRequest as StoreRequest;
use App\Http\Requests\WorkRequest as UpdateRequest;

class WorkCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Work');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/work');
        $this->crud->setEntityNameStrings('work', 'works');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
    
        // ------ CRUD COLUMNS
        $this->crud->addColumn
        ([
        	'name' => 'title',
        	'label' => 'Nom de la réalisation',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'type',
        	'label' => 'Type de projet',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'orientation',
        	'label' => 'Orientation',
        ]);
        
        /// DONT FORGET : ADD COLUMN AUTHOR
        
        
        

        
    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
