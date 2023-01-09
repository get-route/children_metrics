<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['title','url'];
    protected $table = 'tags';

    public function metric()
    {
        return $this->belongsToMany(Metric::class,'tag_metric','metric_id','tag_id');
    }
    public function sluggable()
    {
        return [
            'url' => [
                'source' => 'title'
            ]
        ];
    }
}
