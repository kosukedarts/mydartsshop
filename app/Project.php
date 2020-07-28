<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public static $rules = array(
        'store_name' => 'required',
    );//
}