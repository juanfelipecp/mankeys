<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class play_station extends Model
{
    protected $fillable=['id_play','nombre','descripcion','precio','img'];
}
