<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class termexam extends Model
{
    use HasFactory;
    protected $table = 'termexams';
    public $timestamps = true;
    protected $fillable = ['id','presentDate','termexamClassId','termexamSubjectId','termexamExamId','termexamFile','termexamName'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
