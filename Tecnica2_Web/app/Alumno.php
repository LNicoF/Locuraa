<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $guarded = ['id_alumno'];

    public $timestamps = false;
}
