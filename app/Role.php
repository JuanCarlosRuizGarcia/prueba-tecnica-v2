<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public function empleados()
    {
        return $this->belongsToMany(Empleado::class, 'empleado_rol', 'rol_id', 'empleado_id');
    }
}
