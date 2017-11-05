<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';

    protected $fillable = ['zamestnanec_id', 'title', 'year_from', 'year_end', 'reg_number'];


}

