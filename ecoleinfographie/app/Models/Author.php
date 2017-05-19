<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Request;

class Author extends Model
{
    use CrudTrait;
    
    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    
    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['firstname', 'lastname', 'picture', 'email', 'social'];
    // protected $hidden = [];
    // protected $dates = [];
    protected $casts = [
        'social' => 'array'
    ];
    
    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    public function getImageAuthor($suffix)
    {
        $basePath = 'uploads/authors/';
        $fullname = pathinfo($this->image, PATHINFO_FILENAME);
        $imageStudent = $basePath . $fullname . $suffix;
        
        if (file_exists($imageStudent)) {
            return URL('/') . '/' . $imageStudent;
        } else {
            return $this->picture;
        }
    }
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function articles()
    {
        return $this->hasMany('App\Models\Article', 'id');
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
    
    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    
    public function setPictureAttribute($value)
    {
        $attribute_name = "picture";
        $disk = "public_folder";
        $path = "uploads/authors";
        
        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the original image size and other sizes
            $image = \Image::make($value);
            $image120x120 = \Image::make($value)->fit(120,120);
            $image60x60 = \Image::make($value)->fit(60,60);
            $image30x30 = \Image::make($value)->fit(30,30);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image original on disk and new sizes.
            \Storage::disk($disk)->put($path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($path, $filename, '_120x120', $image120x120);
            Utils::storeNewSize($path, $filename, '_60x60', $image60x60);
            Utils::storeNewSize($path, $filename, '_30x30', $image30x30);
            
            // 3. Save the path of original image to the database
            $this->attributes[$attribute_name] = $path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'no-avatar.jpg') !== false || $value == null)
        {
            $this->attributes['picture'] = 'https://api.adorable.io/avatars/60/' . Request::get('email') . '.png';;
        }
    }
}
