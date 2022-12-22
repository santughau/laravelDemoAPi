<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = ['id','studentClass','studentBatch','studentMobile','studentFee','studentDob','studentName','studentAddress','studentMedium','studentGender','studentEmail','studentSchool','studentPasswor','studentMac','studentSubject','studentImage','studentStatus'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
