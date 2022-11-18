<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $fillable = ['nombre_rol'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
