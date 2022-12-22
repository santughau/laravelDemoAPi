<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fee extends Model
{
    use HasFactory;
    protected $table = 'fees';
    public $timestamps = true;
    protected $fillable = ['id','feeClass','feeBatch','feeStudentId','feeFeeAmt','feeVoucherNo','feeDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
