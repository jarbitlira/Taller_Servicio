<?php

namespace taller_servicio;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer', 'manufacturer_id');
    }
}
