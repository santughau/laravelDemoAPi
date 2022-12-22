<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    use HasFactory;
    protected $table = 'messages';
    public $timestamps = true;
    protected $fillable = ['id','messageClassId','messageStudentId','messageBatchId','messageText','messageDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
