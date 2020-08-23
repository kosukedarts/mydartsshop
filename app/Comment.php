<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'poster' => 'required',
        'body' => 'required',
    );
}