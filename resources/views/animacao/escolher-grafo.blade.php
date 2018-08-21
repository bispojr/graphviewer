@extends('animacao.template')

@section('titulo-passo')
	Escolha o Grafo
@endsection

@section('action-passo')
	{{ URL::to('/passo/teorema/'.$numeroTeorema.'/confirmar') }}
@endsection

@section('conteudo-passo')		

	<div class="form-group">
		<label for="tipo_grafo" class="col-sm-3 control-label">Tipo de Grafo:</label>
		<div class="col-sm-6">
			<select class="form-control" name="tipo_grafo" id="tipo_grafo">
				<option value="caminho">Caminho</option>
				<option value="arvore">Árvore</option>
				@if($numeroTeorema == 1)
					<option value="completo">Grafo Completo</option>				
					<option value="circuito">Circuito</option>				
					<option value="bipartido">Bipartido Completo</option>
				@endif
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="num_vertices" class="col-sm-3 control-label">Número de vértices:</label>
		<div class="col-sm-6">
			<input type="number" name="num_vertices" id="num_vertices" min="2" max="5">
			<br>
		</div>
	</div>

@endsection

@section('botao-passo')
	<button type="submit" class="btn btn-primary">
		 Próximo <span class="glyphicon glyphicon-forward"></span>
	</button>
@endsection