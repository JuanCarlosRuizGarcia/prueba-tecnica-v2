<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table = 'areas';

    public function empleado()
    {
        return $this->hasOne(Empleado::class,'area_id','id');
    }
}
