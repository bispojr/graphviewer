$(document).ready(function(){

	var valor = $("#tipo_grafo").val();

	  switch(valor){
	  	case 'completo':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 5);
	  		break;
	  	case 'caminho':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'circuito':
	  		$("#num_vertices").prop("min", 3);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'arvore':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'bipartido':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 6);
	  		break;
	  	default: break;
	  }

	$("#tipo_grafo").change(function() {

	  var valor = $("#tipo_grafo").val();

	  switch(valor){
	  	case 'completo':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 5);
	  		break;
	  	case 'caminho':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'circuito':
	  		$("#num_vertices").prop("min", 3);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'arvore':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 10);
	  		break;
	  	case 'bipartido':
	  		$("#num_vertices").prop("min", 2);
	  		$("#num_vertices").prop("max", 6);
	  		break;
	  	default: break;
	  }
	});	
});