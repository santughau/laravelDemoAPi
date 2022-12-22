<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;
    protected $table = 'classlists';
    public $timestamps = true;
    protected $fillable = ['id','complaintDate','complaintStuId','complaintMessages'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
