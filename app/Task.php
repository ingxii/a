<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name','url', 'user_id'];
    protected $hidden = ['created_at', 'updated_at'];
}
