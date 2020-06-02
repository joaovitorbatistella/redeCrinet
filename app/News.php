<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;
use Carbon\Carbon;

class News extends Model
{
    use HasUuid;

    protected $primaryKey = 'uuid';

    public $incrementing = false;

    protected $fillable = ['uuid', 'title', 'body', 'author', 'source', 'image', 'category_id'];

    protected $dates = ['created_at', 'updated_at'];

    public function getUpdatedAtAttribite($value) {
        return Carbon::parse($value)->format('d-m-Y H:i');
    }
}
