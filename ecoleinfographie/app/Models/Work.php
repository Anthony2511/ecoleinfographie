<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Storage;
use Illuminate\Http\Request;
use App\Utils\Utils;



//use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable

class Work extends Model
{
    use CrudTrait;
    use Sluggable;
    use HasTranslations;
    
    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    
    protected $table = 'works';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'title',
        'orientation',
        'type',
        'year',
        'project_link',
        'view3D',
        'video',
        'cover',
        'images',
        'description',
        'other_description',
        'other_link'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $translatable = ['title', 'description', 'other_description'];
    protected $casts = ['images' => 'array'];
    
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
        return url(trans('url.works') . '/' . $this->slug);
    }
    
    public function getOpenButton()
    {
        return '<a class="btn btn-default btn-xs" href="'.$this->getPageLink().'" target="_blank"><i class="fa fa-eye"></i> Visualiser</a>';
    }
    
    public function getImageWork($suffix)
    {
        $basePath = 'uploads/works/';
        $fullname = pathinfo($this->cover, PATHINFO_FILENAME);
        $imageWork = $basePath . $fullname . $suffix;
        
        if (file_exists($imageWork)) {
            return URL('/') . '/' . $imageWork;
        } else {
            return $imageWork = URL('/') . '/img/no-avatar.jpg';
        }
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
    
    public function skills()
    {
        return $this->belongsToMany('App\Models\Skill');
    }
    
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
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
    
    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }
        
        return $this->title;
    }
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    
    public function setCoverAttribute($value)
    {
        $attribute_name   = "cover";
        $disk             = "public_folder";
        $destination_path = "uploads/works";
        
        // TODO : A supprimer, utilisé uniquement pour le seeding.
        if (starts_with($value, 'http://')) {
            $this->attributes[$attribute_name] = $value;
        }
        
        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image')) {
            // 0. Make the image
            $image = \Image::make($value);
            $workIndex = \Image::make($value)->fit(400, 623);
            $workMore = \Image::make($value)->fit(385, 223);
            $workHomeSmall = \Image::make($value)->fit(556, 355);
            $workHomeMiddle = \Image::make($value)->fit(522, 436);
            $workHomeBig = \Image::make($value)->fit(875, 502);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($destination_path, $filename, '_workIndex', $workIndex);
            Utils::storeNewSize($destination_path, $filename, '_more', $workMore);
            Utils::storeNewSize($destination_path, $filename, '_small', $workHomeSmall);
            Utils::storeNewSize($destination_path, $filename, '_middle', $workHomeMiddle);
            Utils::storeNewSize($destination_path, $filename, '_big', $workHomeBig);
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path.'/'.$filename.'.jpg';
        }
        if(strpos($value, 'no-avatar.jpg') !== false || $value == null)
        {
            $this->attributes['picture'] = '/img/no-avatar.jpg';
        }
    }
}
