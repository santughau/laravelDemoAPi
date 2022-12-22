<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $table = 'chapters';
    public $timestamps = true;
    protected $fillable = ['id','chapterTopicId','chapterClassId','chapterSubjectId','chapterName'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
