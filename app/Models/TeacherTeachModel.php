<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherTeachModel extends Model
{
    // use HasFactory;
    protected $table="teacher_teach";
    protected $fillable=[
        'tt_year', 
        'tt_term', 
        'tt_crs_code', 
        'tt_sect', 
        'tt_tch_code'
    ];
}
