<?php
	$ativo["Principal"] = "";
	$ativo["Sobre o projeto"] = "";
	$ativo["Trabalhos publicados"] = "";
	$ativo["Idealizadores"] = "";

	$ativo[$menuAtivo] = " active";
?>

<div class="list-group">
  <a href="{{ URL::to('/')}}" class="list-group-item {{ $ativo['Principal']}}">Principal</a>
  <a href="{{ URL::to('/sobre-o-projeto')}}" class="list-group-item {{ $ativo['Sobre o projeto']}}">Sobre o projeto</a>
  <a href="{{ URL::to('/trabalhos-publicados')}}" class="list-group-item {{ $ativo['Trabalhos publicados']}}">Trabalhos publicados</a>
  <a href="{{ URL::to('/idealizadores')}}" class="list-group-item {{ $ativo['Idealizadores']}}">Idealizadores</a>
</div>