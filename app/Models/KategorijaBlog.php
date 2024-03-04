<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategorijaBlog extends Model
{
    use HasFactory;
    public function blogovi()
    {
        return $this->hasMany(Blog::class);
    }
}
