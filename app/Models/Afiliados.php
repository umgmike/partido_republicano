<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Afiliados extends Model
{
    protected $table = 'afiliados';
    protected $fillable = ['dpi', 'nombre1', 'nombre2', 'nombre3', 'apellido1', 'apellido2', 'apellido3', 'id_puesto', 'id_departamento', 'id_municipio', 'telefono1', 'telefono2', 'email', 'direccion'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
