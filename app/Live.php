<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Live extends Model
{

    protected $primaryKey = 'id';

    protected $fillable = ['src'];

    protected $dates = ['created_at', 'updated_at'];
}
