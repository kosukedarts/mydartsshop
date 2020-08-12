<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = array('id');
   
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'url' => 'required',
    );//

    public function histories()
    {
      return $this->hasMany('App\History');

    }
    
}