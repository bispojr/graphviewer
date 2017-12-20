@extends('base')

@section('teorema-titulo', 'Teorema 1:')

@section('teorema-texto')
	 Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
@endsection

@section('teorema-descricao')

  <div class="tab-content">
    
    @include('teorema.1.pseudocodigo')
    @include('teorema.1.demonstracao')

  </div>

@endsection