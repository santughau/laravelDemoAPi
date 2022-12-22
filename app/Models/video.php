<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    public $timestamps = true;
    protected $fillable = ['id','videoClassId','videoSubjectId','videoChapterId','videoTitle','videoLink'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
