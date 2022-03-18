<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionModel extends Model
{
    // use HasFactory;
    protected $table="question";
    protected $fillable=[
        'qs_id', 
        'qs_question', 
        'qs_ch_no_ans', 
        'qs_ex_time', 
        'qs_score', 
        'qs_crs_code', 
        'qs_tch_code', 
        'qs_ex_date'
    ];
}
