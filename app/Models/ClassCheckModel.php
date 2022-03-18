<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCheckModel extends Model
{
    protected $table="class_check";
    protected $fillable=[
        'cc_id', 
        'cc_year', 
        'cc_term', 
        'cc_crs_code',
        'cc_sect', 
        'cc_date', 
        'cc_time', 
        'cc_ex_times', 
        'cc_tch_code'
    ];
}
