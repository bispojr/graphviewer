<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title></title>

		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

		<script type="text/x-mathjax-config">
		    MathJax.Hub.Config({
		      tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
		    });
	    </script>
	    <script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
	    <script src="{{ asset('js/d3.min.js') }}"></script>
	    <style type="text/css">
			.stage {
			  background: #042029; 
			}
		</style>

	</head>
	<body>

		@include('navbar')

		<div class="row">

			<div class="col-md-1"></div>
			<div class="col-md-10">
				@yield('conteudo')
			</div>
			<div class="col-md-1"></div>

		</div>

		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/visualizador.js') }}"></script>
		<script src="{{ asset('js/seletor.js') }}"></script>

	</body>
</html>