<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $quarded = false;
    protected $fillable = ['title', 'description', 'variant_1',  'variant_2',  'variant_3',  'variant_4', 'answer'];
}
