<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

//use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\SluggableScopeHelpers;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use App\Utils\Utils;

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
        'is_graduated',
        'company',
        'social',
        'has_interview',
        'interview'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['profession', 'interview'];
    protected $casts = [
        'social' => 'array',
        'company' => 'array'
    ];
    
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
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    public function getImageStudent($suffix)
    {
        $basePath = 'uploads/students/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageStudent = $basePath . $fullname . $suffix;
        
        if (file_exists($imageStudent)) {
            return URL('/') . '/' . $imageStudent;
        } else {
            return $imageStudent = URL('/') . '/img/no-avatar.jpg';
        }
    }
    
    public function getPageLink()
    {
        return url(trans('url.students') . '/' . $this->slug);
    }
    
    public function getOpenButton()
    {
        if($this->has_interview == 1)
        {
        return '<a class="btn btn-default btn-xs" href="'.$this->getPageLink().'" target="_blank"><i class="fa fa-eye"></i> Voir son interview</a>';
        }
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function works()
    {
        $this->belongsToMany('App\Models\Work');
    }
    
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
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public_folder";
        $path = "uploads/students";
        
        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the original image size and other sizes
            $image = \Image::make($value);
            $studentCards = \Image::make($value)->fit(313,180);
            $studentAside = \Image::make($value)->fit(200,200);
            $studentSlider = \Image::make($value)->fit(338,359);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image original on disk and new sizes.
            \Storage::disk($disk)->put($path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($path, $filename, '_cards', $studentCards);
            Utils::storeNewSize($path, $filename, '_aside', $studentAside);
            Utils::storeNewSize($path, $filename, '_slider', $studentSlider);
            
            // 3. Save the path of original image to the database
            $this->attributes[$attribute_name] = $path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'no-avatar.jpg') !== false || $value == null)
        {
            $this->attributes['image'] = '/img/no-avatar.jpg';
        }
    }
}
