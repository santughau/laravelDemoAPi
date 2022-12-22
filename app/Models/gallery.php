<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    public $timestamps = true;
    protected $fillable = ['id','galleryImage','galleryTitle'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
