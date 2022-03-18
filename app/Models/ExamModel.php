<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamModel extends Model
{
    // use HasFactory;
    protected $table="exam";
    protected $fillable=[
        'ex_id', 
        'ex_year', 
        'ex_term', 
        'ex_crs_code', 
        'ex_crs_sect', 
        'ex_std_code', 
        'ex_time', 
        'ex_date_time_start', 
        'ex_date_time_end', 
        'ex_total_score', 
        'ex_commit_type'
    ];
}
