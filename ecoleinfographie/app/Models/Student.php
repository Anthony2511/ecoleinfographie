<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

//use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\SluggableScopeHelpers;

class Student extends Model
{
    use CrudTrait;
    use Sluggable;
    use HasTranslations;
    
    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    
    protected $table = 'students';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'firstname',
        'lastname',
        'image',
        'profession',
        'year',
        'orientation',
        'is_freelance',
        'company',
        'social',
        'has_interview',
        'interview'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['profession', 'interview'];
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ],
        ];
    }
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    
    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    
    public function getFirstnameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getLastnameAttribute($value)
    {
        return ucfirst($value);
    }
    
    public function getFullNameAttribute()
    {
        return ucfirst($this->firstname) . ' ' . ucfirst($this->lastname);
    }
    
    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }
        
        $lastname  = $this->lastname;
        $firstname = $this->firstname;
        
        return $firstname . '-' . $lastname;
    }
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
