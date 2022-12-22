<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    public $timestamps = true;
    protected $fillable = ['id','regStudentName','regEmail','regAddress','regQualification','regCourse','regDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
