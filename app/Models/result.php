<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result extends Model
{
    use HasFactory;
    protected $table = 'results';
    public $timestamps = true;
    protected $fillable = ['id','resultStudentId','resultBatchId','resultClassId','resultExamId','resultSubjectId','resultTotalMarks','resultObtainMarks','resultDate','status'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
