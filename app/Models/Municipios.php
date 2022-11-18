<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';
    protected $fillable = ['id_departamento', 'municipio'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
