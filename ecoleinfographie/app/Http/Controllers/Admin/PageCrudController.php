<?php
namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PageManager\app\Http\Controllers\Admin\PageCrudController as OriginalPageCrudController;
use App\PageTemplates;

// VALIDATION: change the requests to match your own file names if you need form validation
use Backpack\PageManager\app\Http\Requests\PageRequest as StoreRequest;
use Backpack\PageManager\app\Http\Requests\PageRequest as UpdateRequest;

class PageCrudController extends OriginalPageCrudController
{
    public function __construct($template_name = false)
    {
        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        parent::__construct();
        $this->crud->setModel("App\Models\Page");
    }
    
    public function create($template = false)
    {
        return parent::create($template);
    }
    
    public function store(StoreRequest $request)
    {
        return parent::store($request);
    }
    
    public function edit($id, $template = false)
    {
        return parent::edit($id, $template);
    }
    
    public function update(StoreRequest $request)
    {
        return parent::update($request);
    }
    
    public function addDefaultPageFields($template = false)
    {
        //parent::addDefaultPageFields($template);
        $options = 'Paramètres';
        
        $this->crud->addField
        ([
            'name' => 'template',
            'label' => 'Selectionner le template de la page',
            'type' => 'select_page_template',
            'options' => $this->getTemplatesArray(),
            'value' => $template,
            'allows_null' => false,
            'tab' => $options,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
                ]
        ]);
        
        $this->crud->addField
        ([
            'name' => 'name',
            'label' => 'Nom de la page dans l’admin',
            'type' => 'text',
            'tab' => $options,
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        
        $this->crud->addField
        ([
           'name' => 'title',
            'label' => 'Titre de la page',
            'type' => 'text',
            'tab' => $options,
        ]);
    
        $this->crud->addField
        ([
            'name' => 'slug',
            'label' => 'L’URL de la page',
            'type' => 'text',
            'hint' => 'Automatiquement généré à partir du titre de la page si le champ n’est pas rempli',
            'tab' => $options,
        ]);
    
        $this->crud->addField
        ([
            'name' => 'class_body',
            'label' => 'Définir une classe sur le body pour la page',
            'fake' => 'true',
            'store_in' => 'extras',
            'tab' => $options
        ]);
        
        $this->crud->addField
        ([
            'name' => 'header_large',
            'label' => 'La page dispose t’elle d’un \'grand\' header ?',
            'type' => 'checkbox',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => $options,
        ]);
        
        
    }
    
    public function useTemplate($template_name = false)
    {
        parent::useTemplate($template_name);
    }
    
    public function getTemplates()
    {
        return parent::getTemplates();
    }
    
    public function getTemplatesArray()
    {
        return parent::getTemplatesArray();
    }
    
}
