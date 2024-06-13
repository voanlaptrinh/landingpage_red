<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langdingpage extends Model
{
    use HasFactory;
    protected $table = 'landingpages';
    protected $fillable = ['title', 'images', 'order'];

    public function block()
    {
        return $this->hasOne(Block::class, 'landingpage_id');
    }
}
