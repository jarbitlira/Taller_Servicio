<?php

namespace taller_servicio\Http\Controllers;

use taller_servicio\User;
use taller_servicio\Http\Controllers\Controller;

class PruebaController extends Controller
{

    public function blade()
    {
        return view('child');
    }
}
