<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Categories extends Model
{
    use HasUuid;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = ['uuid', 'nameCategory', 'type'];
}
