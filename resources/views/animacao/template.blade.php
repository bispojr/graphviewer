@extends('template')

@section('conteudo')

	<?php
		$nav = array(  
			'passo1' => 'disabled',
			'passo2' => 'disabled',
			'passo3' => 'disabled'
		);

		$nav[$navAtivo] = "active";
	  ?>

	  <div class="row">
	  	<div class="col-md-10">

	  		<div class="page-header">
			  <h1>
			  	@yield("titulo-passo")
			  </h1>
			</div>

			<div class="container-fluid">
				<ul class="nav nav-pills">
					<li id="aba-passo-1" class="{{ $nav['passo1'] }}">
						<a>Passo <span class="badge">1</span></a>
					</li>
				  	<li id="aba-passo-2" class="{{ $nav['passo2'] }}">
				  		<a>Passo <span class="badge">2</span></a>
				  	</li>
				  	<li id="aba-passo-3" class="{{ $nav['passo3'] }}">
				  		<a>Passo <span class="badge">3</span></a>
				  	</li>
				</ul>

				<div class="panel panel-default">
				
					<form class="form-horizontal" method="post" action="@yield('action-passo')">
				    	<div class="panel-body" style="height: 14em">
				    		<div class="row">
	  							<div class="col-md-8">

						    		@yield("conteudo-passo")

								</div>
							</div>
						</div>
						<div class="panel-footer text-right">
							@yield("botao-passo")
						</div>

						<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
					</form>
				
				</div>
				
				

			</div>

	  	</div>
	  </div>
	

@endsection