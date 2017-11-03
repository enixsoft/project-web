<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = ['zamestnanec_id', 'description', 'consultation_hours', 'education'];


}
