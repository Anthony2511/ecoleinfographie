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
        parent::addDefaultPageFields($template);
        
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
