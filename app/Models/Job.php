<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    function tag(string $name) {
        $tag = Tag::firstOrCreate(["name" => $name]);
        return $this->tags()->attach($tag);
    }
    function employer():BelongsTo {
        return $this->belongsTo(Employer::class);
    }
    function tags():BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
