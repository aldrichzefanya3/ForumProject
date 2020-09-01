<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;
// use CyrildeWit\EloquentViewable\InteractsWithViews;
// use CyrildeWit\EloquentViewable\Contracts\Viewable;
class forum extends Model
{
    // use InteractsWithViews;

    protected $table='forums';
    public function comments(){
           return $this->morphMany('App\Comment','commentable');
    }
         
}
