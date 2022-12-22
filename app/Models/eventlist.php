<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventlist extends Model
{
    use HasFactory;
    protected $table = 'eventlists';
    public $timestamps = true;
    protected $fillable = ['id','eventTitle','eventMessage','eventcolor','eventDate'];
    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
