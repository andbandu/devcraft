<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'badge_class',
        'gradient',
        'emoji',
        'read_time',
        'author_name',
        'author_image',
        'snippet',
    ];
}
