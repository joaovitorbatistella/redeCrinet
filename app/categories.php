<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class categories extends Model
{
    use HasUuid;
    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $fillable = ['uuid', 'nameCategory'];
}
