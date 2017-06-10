<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content',
        'user_id',
    ];

    protected $append = [
    	'abstract',
    ];

    public function getAbstractAttribute()
    {
    	return substr($this->content,0, 30);
    }

     /**
     * The attributes that should be cast to native types.
     *
     * @var string
     * @return string
     */
    public function getCreatedAtAttribute($value){
    	$value = new Carbon($value);
    	$value = Carbon::now()->diffForHumans($value);
    	return $value;
    }

    /**
     * Convierte a mayusculas
     *
     * @var string
     * @return string
     */
    public function getContentAttribute($value){
    	return strtoupper($value);
    }

    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

   public function interactions()
   {
       return $this->belongsToMany('App\Models\User', 'create_interactions_table' )
                    ->withPivot('reaction');
   }
    
}
