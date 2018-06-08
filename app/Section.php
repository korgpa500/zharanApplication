<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $primaryKey = "section_id";


    public function users()
    {
        return $this->hasMany('App\User');
    }


    protected $fillable = [
        'section_name',
    ];
}
