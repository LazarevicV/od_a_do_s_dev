<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resurs extends Model
{
    use HasFactory;

    public function fontovi()
    {
        return $this->hasMany(Font::class);
    }

    public function video_tutorijali()
    {
        return $this->hasMany(VideoTutorijal::class);
    }
}
