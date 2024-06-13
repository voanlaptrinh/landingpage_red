<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;
    protected $table = 'blocks';
    
    protected $fillable = [
        'title', 'title1', 'title2', 'title3', 'title4', 'title5',
        'description', 'description1', 'description2', 'description3', 'description4', 'description5',
        'images', 'images1', 'images2', 'images3', 'images4', 'images5',
        'content', 'content1', 'content2', 'content3', 'content4', 'content5',
        'json', 'json1', 'json2', 'json3', 'json4', 'json5',
        'landingpage_id'
    ];
    protected $casts = [
        'json' => 'array',
        'json1' => 'array',
        'json2' => 'array',
        'json3' => 'array',
        'json4' => 'array',
        'json5' => 'array',
    ];

    public function landingPage()
    {
        return $this->belongsTo(Langdingpage::class, 'landingpage_id');
    }
}