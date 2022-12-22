<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questiondata extends Model
{
    use HasFactory;
    protected $table = 'questiondatas';
    public $timestamps = true;
    protected $fillable = ['id','questions','optionA','optionB','optionC','optionD','quizId','answer'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
