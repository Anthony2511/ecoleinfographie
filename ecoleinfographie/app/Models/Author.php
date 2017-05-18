<?php

namespace App\Models;

use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;

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
            $image60x60 = \Image::make($value)->fit(60,60);
            $image30x30 = \Image::make($value)->fit(30,30);
            // 1. Generate a filename.
            $filename = md5($value.time());
            // 2. Store the image original on disk and new sizes.
            \Storage::disk($disk)->put($path.'/'.$filename.'.jpg', $image->stream());
            Utils::storeNewSize($path, $filename, '_60x60', $image60x60);
            Utils::storeNewSize($path, $filename, '_30x30', $image30x30);
            
            // 3. Save the path of original image to the database
            $this->attributes[$attribute_name] = $path.'/'.$filename.'.jpg';
        }
        
        if(strpos($value, 'no-avatar.jpg') !== false || $value == null)
        {
            $this->attributes['picture'] = 'https://api.adorable.io/avatars/60/' . $this->attributes['email'] . '.png';
        }
    }
}
