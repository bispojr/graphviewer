<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \BispoJr\GraphLib\Graph as Graph;
use \BispoJr\GraphLib\Factory as Factory;
use \BispoJr\GraphLib\Algorithm as Algorithm;
use App\Http\Controllers\Controller;

class TeoremaController extends Controller
{
    public function index(Request $request){

        $numero =  $request->input('numeroTeorema');
        $tipoDeGrafo =  $request->input('tipoDeGrafo');
        $numeroVertices =  $request->input('numeroVertices');

        switch ($tipoDeGrafo) {
            case 'completo':
                $h = Factory::k($numeroVertices);
                $data = $h->d3();
                break;
            case 'caminho':
                $h = Factory::path($numeroVertices-1);
                $data = $h->d3();
                break;
            case 'circuito':
                $h = Factory::circuit($numeroVertices);
                $data = $h->d3();
                break;
            case 'arvore':
                $h = Factory::tree($numeroVertices);
                $data = $h->d3();
                break;
            case 'bipartido':
                $h = Factory::fullBipartite($numeroVertices);
                $data = $h->d3();
                break;
        }

        $data["numero"] =  $numero;
        return view('teorema.'.$numero.'.index', $data);
    }
}