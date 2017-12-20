@extends('template')

@section('conteudo')

	<div class="row">
  		<div class="col-md-9">
  			<div class="jumbotron text-center">
			  <h1>GraphViewer</h1>
			  <p>Visualize as suas demonstrações em grafos!</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Use agora!</a></p>
			</div>
  		</div>
  		<div class="col-md-3">
  			@include('menulateral')
  		</div>
	</div>

@endsection