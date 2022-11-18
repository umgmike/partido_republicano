<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamentos';
    protected $fillable = ['departamento'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
