<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    protected $table = 'metrics';
    protected $fillable = ['title', 'description', 'text', 'photo', 'prise', 'views', 'url', 'public'];

    public function comments()
    {
        return $this->hasMany(Comment::class,'metric_id');
    }

    public function sluggable()
    {
        return [
            'url' => [
                'source' => 'title'
            ]
        ];
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_metric','metric_id','tag_id');
    }
}
