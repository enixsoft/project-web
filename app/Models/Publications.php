<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    protected $table = 'publications';

    protected $fillable = ['ISBN', 'title', 'sub_title', 'all_authors', 'type', 'publisher', 'pages', 'year', 'code'];


}
