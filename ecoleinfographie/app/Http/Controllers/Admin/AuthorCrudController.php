<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AuthorRequest as StoreRequest;
use App\Http\Requests\AuthorRequest as UpdateRequest;

class AuthorCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Author');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/author');
        $this->crud->setEntityNameStrings('un auteur externe', 'auteurs externe');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
    
        // ------ CRUD COLUMNS
        $this->crud->addColumn
        ([
        	'name' => 'firstname',
        	'label' => 'Prénom',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'lastname',
        	'label' => 'Nom',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'email',
        	'label' => 'Email',
        ]);

        // ------ CRUD FIELDS
        $this->crud->addField
        ([
        	'name' => 'firstname',
        	'label' => 'Prénom',
        	'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField
        ([
        	'name' => 'lastname',
        	'label' => 'Nom',
        	'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
        ]);
        $this->crud->addField
        ([
        	'name' => 'picture',
        	'label' => 'Photo',
        	'type' => 'image',
            'upload' => true,
            'crop' => true,
            'default' => 'img/no-avatar.jpg',
        ]);
        $this->crud->addField
        ([
        	'name' => 'email',
        	'label' => 'Adresse email',
        	'type' => 'email',
        ]);
        $this->crud->addField
        ([
        	'name' => 'social',
        	'label' => 'Réseaux sociaux',
        	'type' => 'social',
        ]);
       

        // ------ CRUD BUTTONS
        
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
