<?php

namespace App\Models;

use App;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Request;
use Cookie;

class Comment extends Model
{
    use CrudTrait;
    
    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */
    
    protected $table = 'comments';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['content', 'user_name', 'email', 'article_id'];
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
    
    public function setValueCommentFormEmail()
    {
        if (Request::old('email') && Cookie::get('email') == null)
        {
            echo Request::old('email');
        } elseif (Cookie::get('email') !== null){
            echo Request::cookie('email');
        }
    }
    
    public function setValueCommentFormUsername()
    {
        if (Request::old('user_name') && Cookie::get('user_name') == null)
        {
            echo Request::old('user_name');
        } elseif (Cookie::get('user_name') !== null){
            echo Request::cookie('user_name');
        }
    }
    
    
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    
    public function article()
    {
        return $this->belongsTo('App\Models\Article');
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
