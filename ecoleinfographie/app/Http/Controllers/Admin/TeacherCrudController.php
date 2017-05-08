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
        $this->crud->setEntityNameStrings('professeur', 'professeurs');
        
    
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
    
        // ------ CRUD BUTTONS
        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');
        
        // ------ CRUD FIELDS
        $this->crud->addField
        ([
        	'name' => 'firstname',
        	'label' => 'Prénom',
        	'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'Contenu'
        ]);
        $this->crud->addField
        ([
            'name' => 'lastname',
            'label' => 'Nom',
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'Contenu'
        ]);
        $this->crud->addField
        ([
            'name' => 'role',
            'label' => 'Rôle',
            'type' => 'text',
            'hint' => 'Par exemple, Professeur ou Professeur-invité,…',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name' => 'description',
            'label' => 'Description',
            'type' => 'textarea',
            'hint' => 'Description du professeur qui apparaîtra sur son profile',
            'attributes' => [
                'style' => 'min-height: 150px'
            ],
            'tab' => 'Contenu'
        ]);
        $this->crud->addField
        ([
        	'name' => 'email',
        	'label' => 'L’adresse email du professeur',
        	'type' => 'email',
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name' => 'picture',
            'label' => 'Photo du professeur',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'default' => 'img/no-avatar.jpg',
            'tab' => 'Contenu',
        ]);
        $this->crud->addField
        ([
            'label' => 'Sélectionnez les cours du prof',
            'type' => 'select2_multiple',
            'name' => 'courses',
            'entity' => 'courses',
            'attribute' => 'title',
            'model' => "App\Models\Course",
            'pivot' => true,
            'tab' => 'Contenu'
        ]);
        $this->crud->addField
        ([
            'name' => 'social',
            'label' => 'Réseaux sociaux',
            'type' => 'table',
            'entity_singular' => 'un réseau social',
            'columns' => [
                'name' => 'Nom du réseau social',
                'link' => 'Lien vers votre espace'
            ],
            'tab' => 'Réseaux sociaux',
        ]);
        
        // Réseaux sociaux
        /*$this->crud->addField
        ([
            'name' => 'facebook',
            'label' => 'Facebook',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'twitter',
            'label' => 'Twitter',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'linkedin',
            'label' => 'Linkedin',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'behance',
            'label' => 'Behance',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'pinterest',
            'label' => 'Pinterest',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'dribbble',
            'label' => 'Dribbble',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'youtube',
            'label' => 'Youtube',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'vimeo',
            'label' => 'Viméo',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);
        $this->crud->addField
        ([
            'name' => 'site',
            'label' => 'Site personnel',
            'type' => 'url',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Réseaux sociaux'
        ]);*/
        
        // Paramètres
        $this->crud->addField
        ([
            'name' => 'status',
            'label' => 'Statut',
            'type' => 'select_from_array',
            'hint' => 'Si le professeur n’est plus dans l’école, vous pouvez le masquer sans le supprimer',
            'options' => ['visible' => 'Visible', 'hidden' => 'Non visible'],
            'tab' => 'Paramètres'
        ]);
        $this->crud->addField([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Est automatiquement généré à partir du prénom-nom si pas remplit.',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => 'Paramètres'
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
