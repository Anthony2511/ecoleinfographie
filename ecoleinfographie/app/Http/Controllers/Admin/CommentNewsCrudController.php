<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\CommentNewsRequest as StoreRequest;
use App\Http\Requests\CommentNewsRequest as UpdateRequest;

class CommentNewsCrudController extends CrudController
{
    public function setup()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\CommentNews');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/commentnews');
        $this->crud->setEntityNameStrings('un commentaire', 'commentaires');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
    
        $this->crud->denyAccess('update');
    
        // ------ CRUD COLUMNS
        $this->crud->addColumn
        ([
            'name' => 'user_name',
            'label' => 'Nom/Pseudo',
        ]);
        $this->crud->addColumn
        ([
            'name' => 'email',
            'label' => 'Adresse e-mail',
        ]);
        $this->crud->addColumn
        ([
            'label' => "Sur l’article",
            'type' => "select",
            'name' => 'news_id',
            'entity' => 'news',
            'attribute' => "title",
            'model' => "App\Models\News"
        ]);
        $this->crud->addColumn
        ([
            'name' => 'content',
            'label' => 'Commentaire',
            'type' => 'text'
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
