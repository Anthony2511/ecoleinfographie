<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\SkillRequest as StoreRequest;
use App\Http\Requests\SkillRequest as UpdateRequest;

class SkillCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Skill');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/skill');
        $this->crud->setEntityNameStrings('une compétence', 'Compétences technique');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        
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
