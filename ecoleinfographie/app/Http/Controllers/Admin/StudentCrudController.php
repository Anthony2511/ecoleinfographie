<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StudentRequest as StoreRequest;
use App\Http\Requests\StudentRequest as UpdateRequest;

class StudentCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Student');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/student');
        $this->crud->setEntityNameStrings('un étudiant', 'étudiants');

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
    
        // ------ CRUD BUTTONS
        $this->crud->addButtonFromModelFunction('line', 'open', 'getOpenButton', 'beginning');
        
        // ------ CRUD FIELDS
        
        $tab1 = 'Fiche de l’étudiant';
        $tab2 = 'Ajouter une interview';
        $tab3 = 'Réseaux sociaux';
    
        $this->crud->addField
        ([
            'name' => 'firstname',
            'label' => 'Prénom',
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => $tab1
        ]);
        $this->crud->addField
        ([
            'name' => 'lastname',
            'label' => 'Nom',
            'type' => 'text',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => $tab1
        ]);
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Photo de l’étudiant si disponible',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'default' => 'img/no-avatar.jpg',
            'tab' => $tab1
        ]);
        $this->crud->addField
        ([
            'name' => 'orientation',
            'label' => 'Orientation choisie',
            'type' => 'select_from_array',
            'options' => ["2D" => "Design graphique", "3D" => "3D/Vidéo", "web" => "Web"],
            'allows_null' => false,
            'tab' => $tab1
        ]);
        $this->crud->addField
        ([
            'name' => 'is_graduated',
            'label' => 'L’étudiant est-il diplômé ?',
            'type' => 'checkbox',
            'hint' => 'Cocher pour dire oui, décocher pour dire non..',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-4',
            ],
            'tab' => $tab1
        ]);
        $this->crud->addField
        ([
            'name' => 'year',
            'label' => 'Année d’obtention du diplôme',
            'type' => 'number',
            'hint' => 'Si l’étudiant est diplômé, indiquez l’année d’obtention de son diplôme',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-8',
            ],
            'attributes' => ['min' => '1995', 'max' => '2050'],
            'tab' => $tab1
        ]);
    
        $this->crud->addField
        ([
            'name' => 'info_interview',
            'type' => 'custom_html',
            'value' => '<h3>Vous disposez d’une interview du parcours de l’étudiant ? Remplissez les champs suivant, sinon, ignorez.</h3><hr>',
            'tab' => $tab2
        ]);
        
        $this->crud->addField
        ([
        	'name' => 'is_freelance',
        	'label' => 'L’ancien étudiant est-il freelance&nbsp;?',
        	'type' => 'checkbox',
            'hint' => 'Si il ne travaille pas dans une entreprise, cochez la case, sinon ignorez.',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => $tab2
        ]);
        
        $this->crud->addField
        ([
            'name' => 'has_interview',
            'label' => 'Afficher l’étudiant sur la page "Les parcours de nos anciens étudiants"&nbsp;?',
            'type' => 'checkbox',
            'hint' => 'Cocher pour dire oui. Décocher pour dire non.',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ],
            'tab' => $tab2
        ]);
        $this->crud->addField
        ([
            'name' => 'profession',
            'label' => 'Profession',
            'type' => 'text',
            'hint' => 'Par exemple : Freelance, Réalisateur, Infographiste,…',
            'tab' => $tab2
        ]);
        $this->crud->addField
        ([
        	'name' => 'company',
        	'label' => 'L’entreprise dans laquelle l’ancien étudiant est en poste s’il n’est pas freelance',
        	'type' => 'table',
            'entity_singular' => 'le lien',
            'columns' => [
                'name' => 'Nom de l’entreprise',
                'url' => 'Lien vers le site de l’entreprise',
            ],
            'max' => 1,
            'tab' => $tab2
        ]);
        $this->crud->addField
        ([
            'name' => 'interview',
            'label' => 'L’interview de l’étudiant (sous forme de question/réponse)',
            'type' => 'ckeditor',
            'tab' => $tab2
        ]);
        $this->crud->addField
        ([
            'name' => 'interview',
            'label' => 'L’interview de l’étudiant (sous forme de question/réponse)',
            'type' => 'interview',
            'columns' => [
                'question' => 'La question posée',
                'response' => 'La réponse donnée',
            ],
            'tab' => $tab2
        ]);
        
        
        
        $this->crud->addField
        ([
        	'name' => 'separator',
        	'type' => 'custom_html',
            'value' => '<p>Si l’étudiant dispose d’une interview, vous pouvez remplir tous les champs pour lesquels vous disposez d’un réseau social.</p><p>Autrement, ne remplissez que le champ "<strong>Portfolio</strong>" si disponible (les autres sont ignorés).</p>',
            'tab' => $tab3
        ]);
        $this->crud->addField
        ([
        	'name' => 'social',
        	'label' => 'Réseaux sociaux et portfolio',
        	'type' => 'social',
            'entity_singular' => 'un réseau social',
            'columns' => [
                'type' => 'Nom du réseau social',
                'url' => 'Lien',
            ],
            'min' => 0,
            'max' => 9,
            'tab' => $tab3
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
