<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batch extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'batches';
    public $timestamps = true;
    protected $fillable = ['id','batchName','batchClass','batchFee','batchTime','batchStartsFrom'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
