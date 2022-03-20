<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'date_start', 'date_end'];
    protected $table = 'sessions';
    protected $quarded = false;

     public function tests()
     {
         return $this->belongsToMany(Task::class, 'candidates_test', 'candidates_id', 'test_id');
     }
}
