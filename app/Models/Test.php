<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'time'];
    protected $table = 'tests';
    protected $quarded = false;

//     public function tasks()
//     {
//         return $this->belongsToMany(Task::class, 'test_task', 'test_id', 'task_id');
//     }

}
