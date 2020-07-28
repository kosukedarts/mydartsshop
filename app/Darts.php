<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darts extends Model
{
    public static $rules = array(
        'title' => 'required',
    );//
}
