<?php

namespace App\Models;

use App;
use Backpack\CRUD\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Request;
use Cookie;
use Carbon\Carbon;

class CommentNews extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'comments-news';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['content', 'user_name', 'email', 'news_id'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    
    public function getDate()
    {
        if (App::getLocale() == 'fr') {
            Carbon::setLocale('fr');
            
            return $this->created_at->diffForHumans();
        } else {
            return $this->created_at->diffForHumans();
        }
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function news()
    {
        return $this->belongsTo('App\Models\News', 'news_id');
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
}
