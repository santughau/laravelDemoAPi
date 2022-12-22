<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subjectdata extends Model
{
    use HasFactory;
    protected $table = 'subjectdatas';
    public $timestamps = true;
    protected $fillable = ['id','subjectClassId','subjectName'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
