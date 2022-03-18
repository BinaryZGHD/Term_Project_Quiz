<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamControlModel extends Model
{
    // use HasFactory;
    protected $table="exam_control";
    protected $fillable=[
        'exc_id', 
        'exc_year', 
        'exc_term', 
        'exc_crs_code', 
        'exc_sect', 
        'exc_tch_code', 
        'exc_time', 
        'exc_status', 
        'exc_date_start', 
        'exc_date_stop'
    ];
}
