<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollModel extends Model
{
    // use HasFactory;
    protected $table="enroll";
    protected $fillable=[
        'enr_year', 
        'enr_term', 
        'enr_crs_code', 
        'enr_sect', 
        'enr_seq', 
        'enr_std_code'
    ];
}
