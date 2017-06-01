<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\Sluggable;
//use Backpack\CRUD\ModelTraits\SpatieTranslatable\SluggableScopeHelpers;
use Backpack\CRUD\ModelTraits\SpatieTranslatable\HasTranslations;
use App\Utils\Utils;
use App;
use Carbon\Carbon;
use Request;
use Cookie;

class Article extends Model
{
    use CrudTrait;
    use Sluggable;
    use HasTranslations;
    
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    
    protected $table = 'articles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = [
        'slug',
        'title',
        'orientation',
        'content',
        'image',
        'introduction',
        'author_id',
        'teacher_id',
        'status',
        'category_id',
        'date'
    ];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'date'     => 'date'
    ];
    protected $translatable = ['title', 'content', 'introduction'];
    
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
    
    public function getImageArticle($suffix)
    {
        $basePath = 'uploads/articles/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageArticle = $basePath . $fullname . $suffix;
        
        if (file_exists($imageArticle)) {
            return URL('/') . '/' . $imageArticle;
        } else {
            return $imageArticle = URL('/') . '/img/no-avatar.jpg';
        }
    }
    
    public function categoryUrl($article)
    {
        switch ($article->orientation) {
            case "web":
                echo '?category=web&subcategory=';
                break;
            case "2D":
                echo '?category=2D&subcategory=';
                break;
            case "3D":
                echo '?category=3D&subcategory=';
                break;
        }
    }
    
    public function getDateForHuman()
    {
        if (App::getLocale() == 'fr') {
            setlocale(LC_TIME, 'fr_FR.utf8');
    
            return Carbon::parse($this->date)->formatLocalized('%d %B %Y');
        } else {
            return Carbon::parse($this->date)->formatLocalized('%d %B %Y');
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
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'article_tag');
    }
    
    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }
    
    public function author()
    {
        return $this->belongsTo('App\Models\Author');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    
    public function likes()
    {
        return $this->hasMany('App\Models\Like');
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
        $destination_path = "uploads/articles";
        
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
            $imageCards = \Image::make($value)->fit(358, 264);
            $imagePopular = \Image::make($value)->fit(56, 54);
            $imagePopular2x = \Image::make($value)->fit(112, 108);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image on disk.
            \Storage::disk($disk)->put($destination_path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($destination_path, $filename, '_cards', $imageCards);
            Utils::storeNewSize($destination_path, $filename, '_popular', $imagePopular);
            Utils::storeNewSize($destination_path, $filename, '_popular2x', $imagePopular2x);
            // 3. Save the path to the database
            $this->attributes[$attribute_name] = Url('/') . '/' . $destination_path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'cover-blog.jpg') !== false || $value == null)
        {
            $this->attributes['image'] = '/img/cover-blog.jpg';
        }
    }
    
}
