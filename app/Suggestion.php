<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{


    public function section()
    {
        return $this->belongsTo(Section::class ,'section_id');
    }


    protected $fillable = [
        'sender_name','sender_email','sender_message','section_id'
    ];

}
