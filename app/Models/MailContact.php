<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailContact extends Model
{
    use HasFactory;
    protected $table = '_mailcontact';
    protected $fillable = [
        'email'
    ];
}
