<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passo extends Model
{
    public static function tiposDeGrafos($numero){
    	$tipos = array();
    	array_push($tipos, "Caminho");
    	array_push($tipos, "Árvore");

    	if($numero == 1){
    		array_push($tipos, "Grafo Completo");
    		array_push($tipos, "Circuito");
    		array_push($tipos, "Bipartido Completo");
    	}

    	return $tipos;
    }
}
