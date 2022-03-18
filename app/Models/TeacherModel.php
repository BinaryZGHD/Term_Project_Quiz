<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherModel extends Model
{
    // use HasFactory;
    protected $table="teacher";
    protected $fillable=[
        'tch_code', 
        'tch_name', 
        'tch_email', 
        'tch_fac_code', 
        'tch_user_login'
    ];
}
