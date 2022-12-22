<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    public $timestamps = true;
    protected $fillable = ['id','quizClassId','quizSubjectId','quizChapterId','quizTitle'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
