<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //


protected $table = 'users';

protected $fillable = ['id', 'meno', 'priezvisko', 'pristupove_prava', 'vek'];


}


