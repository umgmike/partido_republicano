<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Rol;
use App\Models\Genero;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario';
    protected $fillable = ['nombre', 'apellido', 'usuario', 'password', 'estado', 'id_genero', 'id_rol'];
    protected $hidden = ['password', 'remember_token'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function roles()
    {
        return $this->hasOne(Rol::class, 'id', 'id_rol');
    }

    public function getIdRolAttribute($value)
    {
        $roles = Rol::select('id')->where('id','=',$value)->first();
        return $roles->id;
    }

    public function generos_users()
    {
        return $this->hasOne(Genero::class, 'id', 'id_genero');
    }

    public function getIdGeneroAttribute($value)
    {
        $generos_users = Genero::select('id')->where('id','=',$value)->first();
        return $generos_users->id;
    }

}
