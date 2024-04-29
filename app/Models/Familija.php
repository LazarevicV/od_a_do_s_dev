<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familija extends Model
{
    use HasFactory;
    public function fontovi()
    {
        return $this->hasMany(Font::class);
    }
}
