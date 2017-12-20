<?php

namespace App\Http\Controllers;

use App\Passo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassoController extends Controller
{
    public function escolherTeorema(){
        $data["navAtivo"] =  "passo1";
        return view('animacao.index', $data);
    }
    public function escolherGrafo($numero){
        $data["navAtivo"] =  "passo2";
        $data["numeroTeorema"] =  $numero;
        return view('animacao.escolher-grafo', $data);
    }
    public function confirmar($numero, Request $request){
        $data["navAtivo"] =  "passo2";
        $data["numeroTeorema"] =  $numero;
        $data["tipoDeGrafo"] =  $request->input('tipo_grafo');
        $data["numeroVertices"] =  $request->input('num_vertices');
        return view('animacao.confirmar', $data);
    }
}