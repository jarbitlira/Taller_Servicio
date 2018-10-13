<?php

namespace taller_servicio;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    //


    function brands()
    {
        return $this->hasMany('App/Brand');
    }
}
