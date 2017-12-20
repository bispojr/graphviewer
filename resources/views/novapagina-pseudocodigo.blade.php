@extends('base')

@section('teorema-titulo', 'Teorema 1:')

@section('teorema-texto')
	 Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
@endsection

@section('teorema-descricao')
	<p>
    	<b>Algoritmo:</b>
    </p>
    <p>
    	SomaDosGraus(Grafo $g$) <br>
    	arestas $\leftarrow$ Arestas($g$) <br>
    	<b>se</b> Tamanho(arestas) = 1 <b>então</b> <br>
    		&nbsp;&nbsp;&nbsp;&nbsp; retorne 2 <br>
    	<b>senão</b> <br>
    		&nbsp;&nbsp;&nbsp;&nbsp; $a\leftarrow$ arestaQualquer($g$) <br>					
			&nbsp;&nbsp;&nbsp;&nbsp; $h\leftarrow$ grafosemAresta($g$,$a$) <br>					
		<b>retorne</b> ($2 +$ SomaDosGraus($h$)) <br>
		<b>fim se</b>

    </p>
@endsection