<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'artist_name',
        'music_name',
        'youtube_link',
    ];

    public function getYoutubeId()
    {
        preg_match('/(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?v=([^&]+)/', $this->youtube_link, $matches);
        return $matches[1] ?? null;
    }
}
