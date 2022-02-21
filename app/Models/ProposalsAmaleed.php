<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalsAmaleed extends Model
{
    use HasFactory;
    public $table ='proposals_amaleed';
    protected $fillable =['id','proposal','proposal_ar','desc_proposals','desc_proposals_ar'];
}
