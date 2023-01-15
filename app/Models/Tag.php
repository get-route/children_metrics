<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Tag extends Model
{

    protected $fillable = ['title','url'];
    protected $table = 'tags';

    use Sluggable;
    public function metric()
    {
        return $this->belongsToMany(Metric::class,'tag_metric','metric_id','tag_id');
    }
    public function sluggable():array
    {
        return [
            'url' => [
                'source' => 'title'
            ]
        ];
    }
}
