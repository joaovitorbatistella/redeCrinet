<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class News extends Model
{
    use HasUuid;

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $fillable = ['uuid', 'title', 'body', 'author', 'source', 'image', 'category_id'];
}
