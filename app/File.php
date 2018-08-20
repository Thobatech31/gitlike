<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
   protected $fillable = [
        'name',
        'size',
        'project_id',
        'user_id',
       
        
    ];

       public function users(){
        return $this->belongsToMany('App\User');
    }

       public function projects(){
        return $this->belongsToMany('App\Project');
    }

}
