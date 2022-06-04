<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleado';

    protected $fillable = [
        'nombre','email','sexo','area_id','descripcion'
    ];

    public $timestamps = false;

    public function area()
    {
        return $this->belongsTo(Area::class,'area_id','id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'empleado_rol', 'empleado_id', 'rol_id');
    }
}
