<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected function truncatedContent(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit(strip_tags($this->content), 200)
        );
    }
}
