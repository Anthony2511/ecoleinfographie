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
    
        
        // ------ CRUD FIELDS
        $content = 'Fiche';
        $media = 'Médias';
        $link = 'Liens';
    
        $this->crud->addField
        ([
            'name' => 'title',
            'label' => 'Nom de la réalisation',
            'type' => 'text',
            'tab' => $content
        ]);
        $this->crud->addField
        ([
            'name' => 'orientation',
            'label' => 'Orientation',
            'type' => 'select2_from_array',
            'options' => ["2D" => "Design graphique", "3D" => "3D/Vidéo", "web" => "Web"],
            'allows_null' => false,
            'tab' => $content
        ]);
        $this->crud->addField
        ([
            'name' => 'type',
            'label' => 'Type de projet',
            'type' => 'select2_from_array',
            'options' => [
                "site" => "Site web",
                "video" => "Réalisation vidéographique",
                "appmob" => "Application mobile",
                "mag" => "Magazine",
                "idvisu" => "Identité visuelle",
                "animation" => "Animation 3D"
            ],
            'allows_null' => false,
            'tab' => $content
        ]);
        $this->crud->addField
        ([
            'name' => 'year',
            'label' => 'Année de réalisation',
            'type' => 'number',
            'attributes' => ['min' => '1995', 'max' => '2050'],
            'tab' => $content
        ]);
        $this->crud->addField
        ([
            'name' => 'view3d',
            'label' => 'Lien du projet sur Sketchfab',
            'type' => 'url',
            'hint' => 'Pour avoir une visualisation 3D de chez Sketchfab, indiquez le lien du projet sur ce site ici',
            'tab' => $media
        ]);
        $this->crud->addField
        ([
            'name' => 'video',
            'label' => 'Lien vers une vidéo',
            'type' => 'video',
            'hint' => 'Si le projet dispose d’une vidéo (sur Youtube), indiquez le ici',
            'tab' => $media
        ]);
        /*$this->crud->addField([
            'name' => 'cover',
            'label' => 'Photo de couverture',
            'hint' => 'La photo qui apparait dans la liste',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'default' => 'img/no-avatar.jpg',
            'tab' => $content
        ]);*/
        /*$this->crud->addField
        ([
        	'name' => 'images',
        	'label' => 'La gallerie d’image',
        	'type' => 'upload_multiple',
            'hint' => 'Selectionnez les photos du projet à mettre en ligne',
            'tab' => $media
        ]);*/
        $this->crud->addField
        ([
        	'name' => 'description',
        	'label' => 'Description du projet',
        	'type' => 'ckeditor',
            'tab' => $content
        ]);
        $this->crud->addField
        ([
        	'name' => 'other_description',
        	'label' => 'Le mot des profs',
        	'type' => 'ckeditor',
            'hint' => 'Expliquez en quoi ce projet est bien',
            'tab' => $content
        ]);
        $this->crud->addField
        ([
            'name' => 'project_link',
            'label' => 'Lien vers le projet',
            'type' => 'url',
            'hint' => 'Si le projet est disponible à une adresse, indiquez le lien',
            'tab' => $link
        ]);
        $this->crud->addField
        ([
        	'name' => 'other_link',
        	'label' => 'Si le code source sur Github est disponible, précisez-le ici',
        	'type' => 'url',
            'tab' => $link
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
