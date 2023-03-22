<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'user_id',
        'active',
        'published_at',
    ];
    protected $casts = [
        'published_at' => 'datetime'
    ];

    function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    function shortBody()
    {
        return Str::words(strip_tags($this->body), 30, '...');
    }

    public function getFormattedDate()
    {
        return $this->published_at->format('F jS Y');
    }

    function getThumbnail()
    {
        if(str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }
        return asset('storage/' . $this->thumbnail);
    }
}
