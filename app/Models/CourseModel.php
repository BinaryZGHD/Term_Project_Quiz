<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    // use HasFactory;
    protected $table="course";
    protected $fillable=[
        'crs_code',
         'crs_name', 
         'crs_active'
    ];
}
