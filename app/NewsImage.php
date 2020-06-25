<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table = 'news_image';

    protected $fillable = ['path'];

    public function news(){
        return $this->hasMany(News::class);
    }
}
