<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseConfigModel extends Model
{
    // use HasFactory;
    protected $table="course_config";
    protected $fillable=[
        'ccf_year', 
        'ccf_term', 
        'ccf_crs_code', 
        'ccf_num_exam'
    ];
}
