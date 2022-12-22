<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table = 'profiles';
    public $timestamps = true;
    protected $fillable = ['id','profileInstituteName','profileAddressOne','profileAddressTwo','profileTaluka','profileDistri','profileMobile','profileEmail','profileBankName','profileAccNo','profileIfsc','profileSlogan','profileWebsite','profileLogo'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
