@extends('animacao.template')

@section('titulo-passo')
	Escolha o Teorema
@endsection

@section('conteudo-passo')		

	<div class="list-group">
	  <a href="{{ URL::to('/passo/teorema/1/escolher-grafo') }}" class="list-group-item">
	    <h4 class="list-group-item-heading">Teorema 1</h4>
	    <p class="list-group-item-text">
	    	Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
	    </p>
	  </a>
	  <a href="{{ URL::to('/passo/teorema/2/escolher-grafo') }}" class="list-group-item">
	    <h4 class="list-group-item-heading">Teorema 2</h4>
	    <p class="list-group-item-text">
	    	Toda árvore com $n$ vértices tem $n$ - 1 arestas.
	    </p>
	  </a>
	</div>

@endsection