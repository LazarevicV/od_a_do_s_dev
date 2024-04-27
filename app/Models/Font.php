<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Font extends Model
{
    use HasFactory;

    public function fajlovi()
    {
        return $this->hasMany(File::class);
    }

    public function resurs()
    {
        return $this->belongsTo(Resurs::class);
    }
    public function familija()
    {
        return $this->belongsTo(Familija::class);
    }
    public function tezine()
    {
        return $this->belongsToMany(Tezina::class, 'tezinas_fonts', 'font_id', 'tezina_id');
    }
}
