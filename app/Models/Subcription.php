<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcription extends Model
{
    use HasFactory;
    protected $table = 'subcription';
    protected $fillable = [
        'title', 'price','description'
    ];
}
