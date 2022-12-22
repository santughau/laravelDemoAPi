<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    public $timestamps = true;
    protected $fillable = ['id','examClass','examBatch','examTotalMarks','examSubject','examName','examDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
