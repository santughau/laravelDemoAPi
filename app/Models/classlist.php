<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classlist extends Model
{
    use HasFactory;
    protected $table = 'classlists';
    public $timestamps = true;
    protected $fillable = ['id','className'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
