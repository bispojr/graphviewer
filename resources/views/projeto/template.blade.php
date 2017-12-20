@extends('template')

@section('conteudo')

	<div class="row">
  		<div class="col-md-9">
  			@yield('texto-projeto')
  		</div>
  		<div class="col-md-3">
  			@include('projeto.menulateral', array("menuAtivo" => $menuAtivo) )
  		</div>
	</div>

@endsection