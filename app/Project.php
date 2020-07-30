<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = array();
   
    public static $rules = array(
        'store_name' => 'required',
    );//

    public function histories()
    {
      return $this->hasMany('App\History');

    }
    
}