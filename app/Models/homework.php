<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homework extends Model
{
    use HasFactory;
    protected $table = 'homework';
    public $timestamps = true;
    protected $fillable = ['id','homeworkClassId','homeworkSubjectId','homeworkChapterId','homeworkName','homeworkFile'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
