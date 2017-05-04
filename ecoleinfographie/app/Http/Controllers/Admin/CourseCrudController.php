<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CourseRequest as StoreRequest;
use App\Http\Requests\CourseRequest as UpdateRequest;

class CourseCrudController extends CrudController
{
    public function __construct()
    {
        parent::__construct();
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Course');
        $this->crud->setRoute('admin/cours');
        $this->crud->setEntityNameStrings('cours', 'cours');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'name',
            'label' => "Nom du cours"
        ]);
        $this->crud->addColumn([
            'name' => 'orientation',
            'label' => "Orientation"
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'ects',
        	'label' => 'Crédits ECTS',
        ]);
        $this->crud->addColumn
        ([
        	'name' => 'duration',
        	'label' => 'Durée (heures)',
        ]);
        
        // ------ CRUD FIELDS
        $this->crud->addField
        ([
            'name' => 'name',
            'label' => 'Nom du cours',
            'type' => 'text'
        ]);
        $this->crud->addField
        ([
            'name' => 'slug',
            'label' => "Slug (URL)",
            'type' => 'text',
            'hint' => 'Automatiquement généré à partir du nom si vide.'
        ]);
        $this->crud->addField
        ([
        	'name' => 'orientation',
        	'label' => 'Orientation',
        	'type' => 'select_from_array',
            'options' => ["all" => "Commun", "2D" => "Design graphique", "3D" => "3D/Vidéo", "web" => "Web"],
            'allows_null' => false
        ]);
        $this->crud->addField
        ([
            'name' => 'duration',
            'label' => 'Durée du cours en heure',
            'type' => 'number',
            'attributes' => ["step" => "5"],
        ]);
        $this->crud->addField
        ([
        	'name' => 'ects',
        	'label' => 'Nombre de crédits ECTS',
        	'type' => 'number',
            'attributes' => ["step" => "5"],
        ]);
        $this->crud->addField
        ([
        	'name' => 'ratio',
        	'label' => 'Les différentes partie du cours',
        	'type' => 'table',
            'hint' => 'Par exemple "Travaux dirigés", "Travaux pratique", "Théorie", etc…',
            'entity_singular' => 'une partie de cours',
            'columns' => [
                'type' => 'Type',
                'hour' => 'Nombre d’heures (uniquement le nombre, pas de lettre)'
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'evaluation',
            'label' => 'La manière dont est évalué le cours',
            'type' => 'table',
            'entity_singular' => 'une partie de cours',
            'columns' => [
                'type' => 'Type de l’évaluation (ex: Examen écrit, Examen pratique,… '
            ]
        ]);
        $this->crud->addField
        ([
        	'name' => 'bloc',
        	'label' => 'L’année (bloc) dans lequel est dispensé le cours',
        	'type' => 'number',
        ]);
        $this->crud->addField
        ([
        	'name' => 'quadrimester',
        	'label' => 'Dans quel quadrimèstre le cours est-il donné ?',
            'type' => 'select_from_array',
            'options' => ["q1" => "1", "q2" => "2", "all" => "Toute l’année"],
            'allows_null' => false
        ]);
        $this->crud->addField
        ([
        	'name' => 'shortdescription',
        	'label' => 'Description courte (max 180 charactères)',
            'hint' => 'La description qui apparait dans le tableau des cours',
        	'type' => 'text',
        ]);
        $this->crud->addField
        ([
        	'name' => 'description',
        	'label' => 'Description complète',
            'hint' => 'La description qui décrit le cours de manière complète',
        	'type' => 'textarea',
        ]);
        $this->crud->addField
        ([
        	'name' => 'objectives',
        	'label' => 'Les objectifs du cours',
        	'type' => 'table',
            'hint' => 'Indiquez les objectifs que vise à acquérir le cours',
            'entity_singular' => 'un objectif',
            'columns' => [
                'text' => 'Objectif'
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'teachers',
            'label' => 'Les cours du prof',
            'type' => 'select2_multiple',
            'entity' => 'teachers',
            'pivot' => true,
            'attribute' => 'course_id'
        ]);
        $this->crud->addField
        ([
            'label' => 'Ajouter des professeurs aux cours',
            'type' => 'select2_multiple',
            'name' => 'teachers',
            'entity' => 'teachers',
            'attribute' => 'fullname',
            'model' => "App\Models\Teacher",
            'pivot' => true,
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
