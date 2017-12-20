@extends('projeto.template')

@section('texto-projeto')

	<div class="jumbotron text-center">
	  <h1>GraphViewer</h1>
	  <p>Visualize as suas demonstrações em grafos!</p>
	  <p><a class="btn btn-primary btn-lg" href="{{ URL::to('/passo/escolher-teorema')}}" role="button">Use agora!</a></p>
	</div>
	
@endsection