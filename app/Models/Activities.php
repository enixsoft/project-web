<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';

    protected $fillable = ['zamestnanec_id', 'ID', 'date', 'title', 'country', 'type', 'category', 'all_authors'];


}


