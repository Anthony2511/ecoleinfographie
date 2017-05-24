<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\NewsRequest as StoreRequest;
use App\Http\Requests\NewsRequest as UpdateRequest;

class NewsCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\News');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/news');
        $this->crud->setEntityNameStrings('une actualité', 'actualités');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
    
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name'  => 'date',
            'label' => 'Date',
            'type'  => 'date'
        ]);
        $this->crud->addColumn([
            'name'  => 'status',
            'label' => "Status"
        ]);
        $this->crud->addColumn([
            'name'  => 'title',
            'label' => "Title"
        ]);
    
        // ------ CRUD FIELDS
        $this->crud->addField([
            'name'        => 'title',
            'label'       => 'Titre de l’article',
            'type'        => 'text',
            'placeholder' => 'Votre titre ici',
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name'  => 'date',
            'label' => 'Date de publication',
            'type'  => 'date',
            'value' => date('Y-m-d'),
            'tab' => 'Contenu'
        ], 'create');
    
        $this->crud->addField([
            'name'  => 'date',
            'label' => 'Date de publication',
            'type'  => 'date',
            'tab' => 'Contenu'
        ], 'update');
    
        $this->crud->addField([
            'name'  => 'status',
            'label' => "Statut de l’article",
            'type'  => 'enum',
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name'  => 'featured',
            'label' => "Mettre l’article à la une ?",
            'type'  => 'checkbox',
            'tab' => 'Contenu'
        ]);
    
        $this->crud->addField([
            'name'    => 'image',
            'label'   => 'Image de couverture',
            'type'    => 'image',
            'upload'  => true,
            'crop'    => true,
            'default' => 'img/cover-blog.jpg',
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name'  => 'content',
            'label' => 'Contenu de l’article',
            'type'  => 'ckeditor',
            'extra_plugins' => ['image2'],
            'tab' => 'Contenu'
        ]);
        $this->crud->addField([
            'name'  => 'metadescription',
            'label' => 'Indiquez une description pour Google (max: 255 caractères)',
            'type'  => 'textarea',
            'tab' => 'S.E.O'
        ]);
        $this->crud->addField([
            'name'  => 'keywords',
            'label' => 'Mettez quelques mots clés pour votre article (séparé par une virgule, ex: évenement,cours,récompenses,…',
            'type'  => 'textarea',
            'tab' => 'S.E.O'
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
