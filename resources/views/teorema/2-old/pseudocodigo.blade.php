@extends('base')

@section('teorema-titulo', 'Teorema 2:')

@section('teorema-texto')
	 Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
@endsection

@section('teorema-descricao')
	<p>
        ArestasArvore(Grafo $g$) <br>
        vertices $\leftarrow$ Vertices($g$) <br>
        <b>se</b> Tamanho(vertices) = 1 <b>então</b> <br>
            &nbsp;&nbsp;&nbsp;&nbsp; retorne 0 <br>
        <b>senão</b> <br>
            &nbsp;&nbsp;&nbsp;&nbsp; $v\leftarrow$ verticeGrauUm($g$) <br>                  
            &nbsp;&nbsp;&nbsp;&nbsp; $h\leftarrow$ grafosemAresta($g$,$v$) <br>                 
        <b>retorne</b> ($1+$ ArestasArvore($h$)) <br>
        <b>fim se</b>

    </p>
@endsection