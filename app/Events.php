<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class Events extends Model
{
    use HasUuid;

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $fillable = ['uuid', 'title', 'description', 'scheduledto'];

    protected $dates = ['created_at', 'updated_at'];
}
