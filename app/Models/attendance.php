<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    use HasFactory;
    protected $table = 'attendances';
    public $timestamps = true;
    protected $fillable = ['id','presentDate','studentId','status'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
