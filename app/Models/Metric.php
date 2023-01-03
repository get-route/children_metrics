<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{

    public function comments(){
        return $this->hasMany(Comment::class,'metric_id');
    }
}
