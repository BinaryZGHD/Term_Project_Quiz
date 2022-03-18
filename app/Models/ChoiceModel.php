<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceModel extends Model
{
    protected $table="choice";
    protected $fillable =[
        'ch_qs_id',
        'ch_no',
        'ch_desc'
    ];
}
