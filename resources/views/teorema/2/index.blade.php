@extends('base')

@section('teorema-titulo', 'Teorema 2:')

@section('teorema-texto')
	 Toda árvore com $n$ vértices tem $n-1$ arestas (para $n \geq 1$).
@endsection

@section('teorema-descricao')

  <div class="tab-content">
    
    @include('teorema.2.pseudocodigo')
    @include('teorema.2.demonstracao')

  </div>

@endsection