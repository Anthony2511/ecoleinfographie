<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TypeRequest as StoreRequest;
use App\Http\Requests\TypeRequest as UpdateRequest;

class TypeCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Type');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/type');
        $this->crud->setEntityNameStrings('un type de projet', 'Types de projets');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
    
        // ------ CRUD COLUMNS
        $this->crud->addColumn
        ([
            'name' => 'name',
            'label' => 'Nom',
        ]);
    
        // ------ CRUD FIELDS
        $this->crud->addField
        ([
            'name' => 'name',
            'label' => 'Ajoutez une compétence, un logiciel, etc.',
            'type' => 'text',
        ]);
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
