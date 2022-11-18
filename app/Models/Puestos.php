<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puestos extends Model
{
    protected $table = 'puestos';
    protected $fillable = ['puesto'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
