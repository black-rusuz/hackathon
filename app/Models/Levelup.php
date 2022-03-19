<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levelup extends Model
{
    use HasFactory;

    protected $table = 'levelups';
    protected $quarded = false;
    protected $fillable = ['title'];
}
