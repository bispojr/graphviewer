@extends('animacao.template')

@section('titulo-passo')
	Confirme os dados
@endsection

@section('action-passo')
	{{ URL::to('/teorema/'.$numeroTeorema) }}
@endsection

@section('conteudo-passo')		

	<p>
		<b>Teorema:</b> {{ $numeroTeorema }} <br>
		<b>Tipo de Grafo:</b> {{ $tipoDeGrafo }} <br>
		<b>Número de vértices:</b> {{ $numeroVertices}}
	</p>

	<input type="hidden" name="numeroTeorema" value="{{ $numeroTeorema }}">
	<input type="hidden" name="tipoDeGrafo" value="{{ $tipoDeGrafo }}">
	<input type="hidden" name="numeroVertices" value="{{ $numeroVertices }}">

@endsection

@section('botao-passo')
	<button type="submit" class="btn btn-primary">
		 Gerar animação <span class="glyphicon glyphicon-forward"></span>
	</button>
@endsection