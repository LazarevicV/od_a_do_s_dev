<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tezina extends Model
{
    use HasFactory;
    public function fontovi()
    {
        return $this->belongsToMany(Font::class, 'tezinas_fonts', 'tezina_id', 'font_id');
    }
}
