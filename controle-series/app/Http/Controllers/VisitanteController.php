<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Controllers\Controller;

class ConsultaController extends Controller
{
    public function index(){
        $materiais = Material::all();

        return view('/Consulta/visitante')->with('materiais', $materiais);
    }
}