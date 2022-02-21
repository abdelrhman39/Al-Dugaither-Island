<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionHome extends Model
{
    use HasFactory;
    public $table= 'question';
    protected $fillable= [
        'id','answer','answer_ar','text_under_question','text_under_question_ar',
        'serv1_head','serv1_head_ar','serv1_text','serv1_text_ar',
        'serv2_head','serv2_head_ar','serv2_text','serv2_text_ar',
        'serv3_head','serv3_head_ar','serv3_text','serv3_text_ar',
        'created_at','updated_at'
    ];
}
