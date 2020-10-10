<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nintendo extends Model
{
    protected $fillable=['id_nintendo','nombre','descripcion','precio','img'];
}
