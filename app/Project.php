<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = array('id');
   
    public static $rules = array(
        'store_name' => 'required',
        'body' => 'required',
    );//

    public function histories()
    {
      return $this->hasMany('App\History');

    }
    
}