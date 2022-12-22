<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expences extends Model
{
    use HasFactory;
    protected $table = 'expences';
    public $timestamps = true;
    protected $fillable = ['id','expencesParticular','expencesAmt','expencesDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
