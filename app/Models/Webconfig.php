<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webconfig extends Model
{
    use HasFactory;
    protected $table = 'webconfigs';

    protected $fillable = [
        'title', 'images', 'description', 'email', 'address', 'phone', 'facebook', 'youtube', 'twitter', 'telegram', 'zalo'
    ];
}
