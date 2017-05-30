<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\SluggableScopeHelpers;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use App\Utils\Utils;
use Request;


class Teacher extends Model
{
    use CrudTrait;
    use Sluggable;
    use HasTranslations;
    
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'lastname',
        'firstname',
        'role',
        'description',
        'picture',
        'email',
        'social',
        'status',
        'extras'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fakeColumns = ['extras'];
    protected $translatable = ['role', 'description'];
    protected $casts = [
        'social' => 'array'
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
    
    public function getPageLink()
    {
        return url(trans('url.teachers') . '/' . $this->slug);
    }
    
    public function getOpenButton()
    {
        return '<a class="btn btn-default btn-xs" href="'.$this->getPageLink().'" target="_blank"><i class="fa fa-eye"></i> Visualiser</a>';
    }
    
    public function getImageProfile($suffix)
    {
        $basePath = 'uploads/teachers/';
        $fullname = pathinfo($this->picture, PATHINFO_FILENAME);
        $imageProfile = $basePath . $fullname . $suffix;
        
        if (file_exists($imageProfile)) {
            return URL('/') . '/' . $imageProfile;
        } else {
            return $this->picture;
        }
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }
    
    public function articles()
    {
        return $this->hasMany('App\Models\Article');
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
        
        $lastname = $this->lastname;
        $firstname = $this->firstname;
        
        return $firstname . '-' . $lastname;
    }
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    
    public function setPictureAttribute($value)
    {
        $attribute_name = "picture";
        $disk = "public_folder";
        $path = "uploads/teachers";
        
        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the original image size and other sizes
            $image = \Image::make($value);
            $imageProfile = \Image::make($value)->fit(295,281);
            $imageCards = \Image::make($value)->fit(313,180);
            $image120x120 = \Image::make($value)->fit(120,120);
            $image60x60 = \Image::make($value)->fit(60,60);
            $image30x30 = \Image::make($value)->fit(30,30);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image original on disk and new sizes.
            \Storage::disk($disk)->put($path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($path, $filename, '_profile', $imageProfile);
            Utils::storeNewSize($path, $filename, '_cards', $imageCards);
            Utils::storeNewSize($path, $filename, '_120x120', $image120x120);
            Utils::storeNewSize($path, $filename, '_60x60', $image60x60);
            Utils::storeNewSize($path, $filename, '_30x30', $image30x30);
            
            // 3. Save the path of original image to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'no-avatar.jpg') !== false || $value == null)
        {
            $fakeAvatar = 'https://api.adorable.io/avatars/600/' . Request::get('email') . '.png';
            $image = \Image::make($fakeAvatar);
            $imageProfile = \Image::make($fakeAvatar)->fit(295,281);
            $imageCards = \Image::make($fakeAvatar)->fit(313,180);
            $fakeAvatar30x30 = \Image::make($fakeAvatar)->fit(30,30);
            $fakeAvatar60x60 = \Image::make($fakeAvatar)->fit(60,60);
            $fakeAvatar120x120 = \Image::make($fakeAvatar)->fit(120,120);
    
            $filename = md5($fakeAvatar.time());
    
            \Storage::disk($disk)->put($path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($path, $filename, '_profile', $imageProfile);
            Utils::storeNewSize($path, $filename, '_cards', $imageCards);
            Utils::storeNewSize($path, $filename, '_120x120', $fakeAvatar120x120);
            Utils::storeNewSize($path, $filename, '_60x60', $fakeAvatar60x60);
            Utils::storeNewSize($path, $filename, '_30x30', $fakeAvatar30x30);
            
            
            $this->attributes['picture'] = Url('/') . '/' . $path.'/'.$filename.'.jpg';
        }
    }
}
