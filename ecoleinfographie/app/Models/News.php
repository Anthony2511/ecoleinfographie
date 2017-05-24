<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use App\Utils\Utils;
use Carbon\Carbon;
use App;
use Request;
use Cookie;


class News extends Model
{
    use CrudTrait;
    use Sluggable;
    use HasTranslations;
    
    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    
    protected $table = 'news';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['slug', 'title', 'date', 'content', 'image', 'status', 'featured'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'featured' => 'boolean',
        'date' => 'date'
    ];
    protected $translatable = ['title', 'content'];
    
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_title',
            ]
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
    public function getDateForHuman()
    {
        if (App::getLocale() == 'fr') {
            setlocale(LC_TIME, 'fr_FR');
            
            return Carbon::parse($this->date)->formatLocalized('%d %B %Y');
        } else {
            return Carbon::parse($this->date)->formatLocalized('%d %B %Y');
        }
    }
    
    public function getImageNews($suffix)
    {
        $basePath = 'uploads/news/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageNews = $basePath . $fullname . $suffix;
        
        if (file_exists($imageNews)) {
            return URL('/') . '/' . $imageNews;
        } else {
            return $imageNews = URL('/') . '/img/no-avatar.jpg';
        }
    }
    
    public function setValueCommentForm($data)
    {
        if (Request::old($data) && Cookie::get($data) == null)
        {
            echo Request::old($data);
        } elseif (Cookie::get($data) !== null){
            echo Request::cookie($data);
        }
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function commentNews()
    {
        return $this->hasMany('App\Models\CommentNews', 'news_id');
    }
    
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    
    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLIÉ')
                     ->where('date', '<=', date('Y-m-d'))
                     ->orderBy('date', 'DESC');
    }
    
    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */
    
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
    
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public_folder";
        $destination_path = "uploads/news";
        
        // TODO : A supprimer, utilisé uniquement pour le seeding.
        if (starts_with($value, 'http://'))
        {
            $this->attributes[$attribute_name] = $value;
        }
        
        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->image);
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);
            $imagePost = \Image::make($value)->fit(715, 447);
            $imageFeatured = \Image::make($value)->fit(378, 447);
            $imageCards = \Image::make($value)->fit(503, 447);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($destination_path, $filename, '_post', $imagePost);
            Utils::storeNewSize($destination_path, $filename, '_featured', $imageFeatured);
            Utils::storeNewSize($destination_path, $filename, '_cards', $imageCards);
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'cover-blog.jpg') !== false || $value == null)
        {
            $this->attributes['image'] = '/img/cover-blog.jpg';
        }
    }
    
}
