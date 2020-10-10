<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xbox extends Model
{
    protected $fillable=['id_xbox','nombre','descripcion','precio','img'];
}
