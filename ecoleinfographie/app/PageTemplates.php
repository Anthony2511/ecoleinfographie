<?php

namespace App;


trait PageTemplates
{
    /*
    |--------------------------------------------------------------------------
    | Page Templates for Backpack\PageManager
    |--------------------------------------------------------------------------
    |
    | Each page template has its own method, that define what fields should show up using the Backpack\CRUD API.
    | Use snake_case for naming and PageManager will make sure it looks pretty in the create/update form
    | template dropdown.
    |
    | Any fields defined here will show up after the standard page fields:
    | - select template
    | - page name (only seen by admins)
    | - page title
    | - page slug
    */
    
    

    private function home()
    {
	    $this->crud->addField
        ([
		    'name' => 'titleIntro',
		    'label' => 'Titre de l’introduction',
		    'type' => 'text',
		    'fake' => true,
		    'store_in' => 'extras',
            'tab' => 'Introduction'
	    ]);
	    $this->crud->addField
        ([
            'name' => 'descIntro',
            'label' => 'Titre de l’introduction',
            'type' => 'textarea',
            'fake' => true,
            'store_in' => 'extras',
            'tab' => 'Introduction'
        ]);
	    
	    // PortfolioHome
        $this->crud->addField
        ([
        	'name' => 'titlePortfolioHome',
        	'label' => 'Le titre de la section Portfolio sur la page d’accueil',
        	'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
            'tab' => 'Section Portfolio'
        ]);
        $this->crud->addField
        ([
            'name' => 'descPortfolioHome',
            'label' => 'La description de la section Portfolio sur la page d’accueil',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
            'tab' => 'Section Portfolio'
        ]);
        
        // Réalisation n°1
        $this->crud->addField
        ([
            'name'  => 'metas_separator1',
            'type'  => 'custom_html',
        	'value' => '<br><h3><b>Réalisation n°1</b></h3><p>Celle en haut à droite</p><hr>',
        ]);
        $this->crud->addField
        ([
        	'name' => 'p1_option',
        	'label' => 'L’option du projet',
        	'type' => 'select_from_array',
            'options' => ['web' => 'web', '3D' => '3D', '2D' => '2D'],
            'allows_null' => false,
            'fake' => 'true',
            'store_in' => 'extras'
        ]);
        $this->crud->addField
        ([
        	'name' => 'p1_image',
        	'label' => 'Image de la réalisation',
        	'type' => 'browse',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'p1_image_metaDesc',
            'label' => 'Attribut ALT de l’image',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
        	'name' => 'p1_name',
        	'label' => 'Nom de la réalisation',
        	'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p1_desc',
            'label' => 'Courte description de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p1_author',
            'label' => 'Auteur de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
    
        // Réalisation n°2
        $this->crud->addField
        ([
            'name'  => 'metas_separator2',
            'type'  => 'custom_html',
            'value' => '<br><h3><b>Réalisation n°2</b></h3><p>Celle en bas à droite</p><hr>',
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_option',
            'label' => 'L’option du projet',
            'type' => 'select_from_array',
            'options' => ['web' => 'web', '3D' => '3D', '2D' => '2D'],
            'allows_null' => false,
            'fake' => 'true',
            'store_in' => 'extras'
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_image',
            'label' => 'Image de la réalisation',
            'type' => 'browse',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_image_metaDesc',
            'label' => 'Attribut ALT de l’imageimage',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_name',
            'label' => 'Nom de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_desc',
            'label' => 'Courte description de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p2_author',
            'label' => 'Auteur de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
    
        // Réalisation n°3
        $this->crud->addField
        ([
            'name'  => 'metas_separator3',
            'type'  => 'custom_html',
            'value' => '<br><h3><b>Réalisation n°3</b></h3><p>Celle en bas à gauche</p><hr>',
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_option',
            'label' => 'L’option du projet',
            'type' => 'select_from_array',
            'options' => ['web' => 'web', '3D' => '3D', '2D' => '2D'],
            'allows_null' => false,
            'fake' => 'true',
            'store_in' => 'extras'
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_image',
            'label' => 'Image de la réalisation',
            'type' => 'browse',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_image_metaDesc',
            'label' => 'Attribut ALT de l’image',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
            'wrapperAttributes' => [
                'class' => 'form-group col-md-6',
            ]
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_name',
            'label' => 'Nom de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_desc',
            'label' => 'Courte description de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
        $this->crud->addField
        ([
            'name' => 'p3_author',
            'label' => 'Auteur de la réalisation',
            'type' => 'text',
            'fake' => 'true',
            'store_in' => 'extras',
        ]);
    }
	
    private function web_home()
    {
	    $this->crud->addField([
		    'name' => 'header_large',
		    'label' => '<b>La page a t’elle un grand header ?</b>',
		    'type' => 'checkbox',
		    'fake' => true,
		    'store_in' => 'extras',
	    ]);
	    $this->crud->addField([
		    'name' => 'content',
		    'label' => 'Content',
		    'type' => 'wysiwyg',
		    'placeholder' => 'Your content here',
	    ]);
    }
    
	private function web_training()
	{
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Content',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
		]);
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function program_courses()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Content',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
		]);
	}
	
	private function former_students()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'content',
			'label' => 'Content',
			'type' => 'wysiwyg',
			'placeholder' => 'Your content here',
		]);
	}
	
	private function temp_page_former_student()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function temp_page_course()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function realisations()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function oneRealisation()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function blog()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function postBlog()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function graduate()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function temp_prof()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
	private function inscription()
	{
		$this->crud->addField([
			'name' => 'header_large',
			'label' => '<b>La page a t’elle un grand header ?</b>',
			'type' => 'checkbox',
			'fake' => true,
			'store_in' => 'extras',
		]);
		
		$this->crud->addField([
			'name' => 'class_body',
			'label' => 'class_body',
			'fake' => true,
			'store_in' => 'extras',
		]);
	}
	
}
