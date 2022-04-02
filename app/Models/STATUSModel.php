<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STATUSModel extends Model
{
    // use HasFactory;
    protected $table="student";
    protected $fillable=[
        'created_at', 
        'update_at', 
        'ADMIN', 
        'NUMEDIT', 
        'DETAIL'
    ];
}
