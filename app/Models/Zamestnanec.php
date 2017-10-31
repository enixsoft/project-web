<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zamestnanec extends Model
{
    protected $table = 'zamestnanci';

    protected $fillable = ['id', 'name', 'department', 'dep_acronym', 'faculty', 'faculty_acronym', 'description'];


}
