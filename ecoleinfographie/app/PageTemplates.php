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
        $this->crud->addField([   // CustomHTML
                        'name' => 'metas_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Metas</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_title',
                        'label' => 'Meta Title',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_description',
                        'label' => 'Meta Description',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
        $this->crud->addField([
                        'name' => 'meta_keywords',
                        'type' => 'textarea',
                        'label' => 'Meta Keywords',
                        'fake' => true,
                        'store_in' => 'extras',
                    ]);
	    $this->crud->addField([
		    'name' => 'header_large',
		    'label' => '<b>La page a t’elle un grand header ?</b>',
		    'type' => 'checkbox',
		    'fake' => true,
		    'store_in' => 'extras',
	    ]);
        $this->crud->addField([   // CustomHTML
                        'name' => 'content_separator',
                        'type' => 'custom_html',
                        'value' => '<br><h2>Content</h2><hr>',
                    ]);
        $this->crud->addField([
                        'name' => 'content',
                        'label' => 'Content',
                        'type' => 'simplemde',
                        'placeholder' => 'Your content here',
                    ]);
        $this->crud->addField([
                        'name' => 'Ceci est un test',
                        'label' => 'extras',
                        'type' => 'ckeditor',
                    ]);
	    $this->crud->addField([
		    'name' => 'description',
		    'label' => 'Description',
		    'type' => 'wysiwyg',
		    'fake' => true,
		    'store_in' => 'extras',
	    ]);

	    $this->crud->addField([ // image
    'label' => "Profile Image",
    'name' => "image",
    'type' => 'image',
    'upload' => false,
    'crop' => true, // set to true to allow cropping, false to disable
    'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
    'fake' => true,
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
	
}
