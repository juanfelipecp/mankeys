<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pc extends Model
{
    protected $fillable=['id_pc','nombre','descripcion','precio','img'];
}
