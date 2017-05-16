<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\ArticleRequest as StoreRequest;
use App\Http\Requests\ArticleRequest as UpdateRequest;

class ArticleCrudController extends CrudController {
    
    public function __construct() {
        parent::__construct();
        
        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\Models\Article");
        $this->crud->setRoute("admin/article");
        $this->crud->setEntityNameStrings('article', 'articles');
        
        /*
		|--------------------------------------------------------------------------
		| COLUMNS AND FIELDS
		|--------------------------------------------------------------------------
		*/
        
        // ------ CRUD COLUMNS
        $this->crud->addColumn([
            'name' => 'date',
            'label' => 'Date',
            'type' => 'date'
        ]);
        $this->crud->addColumn([
            'name' => 'status',
            'label' => "Status"
        ]);
        $this->crud->addColumn([
            'name' => 'title',
            'label' => "Title"
        ]);
        $this->crud->addColumn([
            'label' => "Category",
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);
        
        // ------ CRUD FIELDS
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Titre de l’article',
            'type' => 'text',
            'placeholder' => 'Votre titre ici'
        ]);
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date de publication',
            'type' => 'date',
            'value' => date('Y-m-d')
        ], 'create');
        $this->crud->addField([
            'name' => 'date',
            'label' => 'Date de publication',
            'type' => 'date'
        ], 'update');
    
        $this->crud->addField([
            'name' => 'image',
            'label' => 'Image de couverture',
            'type' => 'image',
            'upload' => true,
            'crop' => true,
            'default' => 'img/cover-blog.jpg',
        ]);
        $this->crud->addField
        ([
        	'name' => 'introduction',
        	'label' => 'Texte d’introduction de l’article',
        	'type' => 'textarea',
        ]);
        $this->crud->addField([
            'name' => 'content',
            'label' => 'Contenu de l’article',
            'type' => 'ckeditor',
        ]);
        $this->crud->addField([    // SELECT
            'label' => "Catégorie",
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
            'model' => "App\Models\Category"
        ]);
        $this->crud->addField([    // Select2Multiple = n-n
            'label' => 'Tags',
            'type' => 'select2_multiple',
            'name' => 'tags',
            'entity' => 'tags',
            'attribute' => 'name',
            'model' => "App\Models\Tag",
            'pivot' => true,
        ]);
        $this->crud->addField([    // ENUM
            'name' => 'status',
            'label' => "Statut de l’article",
            'type' => 'enum'
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
