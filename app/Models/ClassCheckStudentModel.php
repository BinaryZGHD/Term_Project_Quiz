<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCheckStudentModel extends Model
{
    // use HasFactory;
    protected $table="class_check_student";
    protected $fillable=[
        'ccs_cc_id',
        'ccs_std_code'
    ];
}
