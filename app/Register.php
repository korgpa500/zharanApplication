<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = "register";
    protected $fillable = [
        'name', 'email', 'password', 'mobile', 'type_id', 'section_id', 'read',
    ];
}
