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
        $this->crud->setEntityNameStrings('student', 'students');

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
        
        

        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');

        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);

        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');

        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php

        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        // $this->crud->allowAccess('revisions');

        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();

        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();

        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
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
