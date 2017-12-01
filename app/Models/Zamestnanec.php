<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zamestnanec extends Model
{
    use FullTextSearch;
    
    protected $table = 'zamestnanci';

    protected $fillable = ['id', 'name', 'department', 'dep_acronym', 'faculty', 'faculty_acronym', 'description', 'comments_allowed'];

     protected $searchable = [
        'name',
        'department',
        'faculty',
        'description'        
    ];


}
