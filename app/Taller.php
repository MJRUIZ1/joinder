<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    protected $fillable = ['nombre','tutor','direccion','precio','cupo'];

    
}
