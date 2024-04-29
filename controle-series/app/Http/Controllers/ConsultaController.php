<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Http\Controllers\Controller;

class ConsultaController extends Controller
{
    public function index(){
        $materiais = Material::all();

        return view('consulta')->with('materiais', $materiais);
    }

    public function create(){
        return view('cadastrar');
    }

    public function store(Request $request){
        $nomeMaterial = $request->input('nome');
        $quantidadeMaterial = $request->input('quantidade');
        
        $material = new Material();
        $material->nome = $nomeMaterial;
        $material->quantidade = $quantidadeMaterial;
        $material->save();

        return redirect('/Consulta');
    }

    public function edit(Material $material)
    {
        return view('editar', ['material' => $material]);
    }

    public function update(Request $request, Material $material)
    {
        $material->update([
            'quantidade' => $request->quantidade,
        ]);
        return redirect('/Consulta');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        
        return redirect('/Consulta');
    }
}
