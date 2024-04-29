<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Controllers\Controller;

class visitante extends Controller
{
    public function index(){
        $materiais = Material::all();

        return view('visitante')->with('materiais', $materiais);
    }
}
