<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\TeacherRequest as StoreRequest;
use App\Http\Requests\TeacherRequest as UpdateRequest;

class TeacherCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
    
        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Teacher");
        $this->crud->setRoute("admin/teacher");
        $this->crud->setEntityNameStrings('teacher', 'teachers');
        
    
        /*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
        
        // ----- CRUD COLUMNS
        $this->crud->addColumn
        ([
            'name' => 'lastname',
            'label' => 'Nom',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'firstname',
        	'label' => 'Prénom',
        ]);
    
        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'lastname',
            'label' => 'Nom',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'firstname',
            'label' => 'Prénom',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du nom-prénom si pas remplit.'
        ]);
        $this->crud->addField([
            'name' => 'role',
            'label' => 'Rôle',
            'type' => 'text',
            'hint' => 'Par exemple, Professeur ou Professeur-invité,…'
        ]);
        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'hint' => 'Description du professeur qui apparaîtra sur son profile',
        ]);
        $this->crud->addField([
            'name' => 'picture',
            'label' => 'Photo du professeur',
            'type' => 'browse',
        ]);
        $this->crud->addField
        ([
        	'name' => 'email',
        	'label' => 'L’adresse email du professeur',
        	'type' => 'email',
        ]);
        $this->crud->addField
        ([
        	'name' => 'social',
        	'label' => 'Réseaux sociaux',
        	'type' => 'table',
            'entity_singular' => 'Ajouter un lien',
            'columns' => [
                'link' => 'Lien'
            ],
            'min' => 0,
        ]);
        $this->crud->addField
        ([
        	'name' => 'status',
        	'label' => 'Statut',
        	'type' => 'enum',
            'hint' => 'Si le professeur n’est plus dans l’école, vous pouvez le masquer sans le supprimer'
        ]);
    }
    
    public function store(StoreRequest $request)
    {
        return parent::storeCrud();
    }
    
    public function update(UpdateRequest $request)
    {
        return parent::updateCrud();
    }
}
