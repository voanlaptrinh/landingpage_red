<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infomation extends Model
{
    use HasFactory;
    protected $table = 'infimations';
    protected $fillable = ['meta', 'title', 'description', 'json1', 'image', 'link', 'meta2', 'title2', 'description2', 'json2', 'title3', 'json3'];

    protected $casts = [
        'json1' => 'array',
        'json2' => 'array',
        'json3' => 'array',
    ];

}
