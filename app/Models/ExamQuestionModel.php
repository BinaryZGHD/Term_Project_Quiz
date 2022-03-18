<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamQuestionModel extends Model
{
    // use HasFactory;
    protected $table="exam_question";
    protected $fillable=[
        'eq_ex_id', 
        'eq_seq', 
        'eq_qs_id', 
        'eq_qs_ans', 
        'eq_qs_score', 
        'eq_date_time', 
        'eq_ans_no', 
        'eq_score'
    ];
}
