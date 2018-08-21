$(document).ready(function(){
	
	var linhaAtual = 1;
	var linhaAntiga = 1;
	var pilhaExecucao = 1;
	var m;
	var n;
	var retornoFuncao = 0;
	var desempilhar = false;
	var arestaEscolhida;
	var verticeEscolhido;

	if($("#comecarAnimacaoTeo1").length != 0){
		$("#comecarAnimacaoTeo1").click(comecarAnimacaoTeo1);
	}
	if($("#comecarAnimacaoTeo2").length != 0){
		$("#comecarAnimacaoTeo2").click(comecarAnimacaoTeo2);
	}

	function comecarAnimacaoTeo1(){
		
		var id = "#line" + linhaAntiga;
		$(id).css("background", "white");

		switch(linhaAtual){
			case 1:
				linha1();
				break;
			case 2:
				linha2();
				break;
			case 3:
				linha3();
				break;
			case 4:
				linha4();
				break;
			case 5:
				linha5();
				break;
			case 6:
				linha6();
				break;
			case 7:
				linha7();
				break;
			case 8:
				linha8();
				break;
			default: break;
		}
	}
	function linha1()
	{
		$("#line1").css("background", "yellow");
		$("#simboloBotao").removeClass( "glyphicon-play" ).addClass( "glyphicon-forward" );
		$("#textoBotao").html("");

		var pilhaAtual = $("#pilha-execucao").html();
		var novaChamada = '<tr style="background: yellow; color: black; font-size: 0.8em;">';
        novaChamada += '<td id="chamada' + pilhaExecucao + '">' + pilhaExecucao + ' - SomaDosGraus() = ???</td>';
        novaChamada += '</tr>';
		$("#pilha-execucao").html(novaChamada + pilhaAtual);

		if(pilhaExecucao > 1){
			var nomeChamada = "#chamada" + (pilhaExecucao - 1);
			$(nomeChamada).css("background", "blue");
			$(nomeChamada).css("color", "white");
		}

		pilhaExecucao++;

		linhaAntiga = 1;
		linhaAtual = 2;
	}
	function linha2()
	{
		$("#line2").css("background", "yellow");
		m = link[0].length;
		if(m == 1)
			linhaAtual = 3;
		else
			linhaAtual = 4;
		linhaAntiga = 2;
	}
	function linha3()
	{
		$("#line3").css("background", "yellow");
		retornoFuncao += 2;
		linhaAntiga = 3;
		linhaAtual = 8;
	}
	function linha4(){
		$("#line4").css("background", "yellow");
		linhaAtual = 5;
		linhaAntiga = 4;
	}
	function linha5(){
		$("#line5").css("background", "yellow");
		arestaEscolhida = Math.floor( Math.random()*m );
		link[0][arestaEscolhida]["attributes"]["stroke"]["nodeValue"] = 'yellow';
		linhaAtual = 6;
		linhaAntiga = 5;
	}
	function linha6(){
		$("#line6").css("background", "yellow");
		link[0][arestaEscolhida]["style"]["visibility"] = 'hidden';
		link[0].splice(arestaEscolhida, 1);
		linhaAtual = 7;
		linhaAntiga = 6;
	}
	function linha7(){
		$("#line7").css("background", "yellow");
		linhaAtual = 1;
		linhaAntiga = 7;

		if(desempilhar){
			retornoFuncao += 2;
			linhaAtual = 8;
			linhaAntiga = 7;
		}
	}
	function linha8(){
		$("#line8").css("background", "yellow");

		linhaAtual = 1;
		linhaAntiga = 7;

		if(pilhaExecucao > 1){

			pilhaExecucao--;
			desempilhar = true;
			
			linhaAtual = 7;
			linhaAntiga = 8;
			var nomeChamada = "#chamada" + (pilhaExecucao);
			$(nomeChamada).css("background", "green");
			$(nomeChamada).css("color", "white");

			var textoChamada = $(nomeChamada).html();
			textoChamada = textoChamada.substring(0, textoChamada.length - 3);
			
			textoChamada += retornoFuncao;
			$(nomeChamada).html(textoChamada);

			nomeChamada = "#chamada" + (pilhaExecucao - 1);
			$(nomeChamada).css("background", "yellow");
			$(nomeChamada).css("color", "black");
		}

		if(desempilhar && pilhaExecucao==1){
			$("#simboloBotao").removeClass( "glyphicon-forward" ).addClass( "glyphicon-stop" );
			$("#textoBotao").html("Fim da animação");
			$("#comecarAnimacao-teo-1").prop("disabled", true);

			alert("A soma dos graus neste grafo é " + retornoFuncao + ".");
		}
	}

	function comecarAnimacaoTeo2()
	{	
		var id = "#line" + linhaAntiga;
		$(id).css("background", "white");

		switch(linhaAtual){
			case 1:
				teo2_linha1();
				break;
			case 2:
				teo2_linha2();
				break;
			case 3:
				teo2_linha3();
				break;
			case 4:
				teo2_linha4();
				break;
			case 5:
				teo2_linha5();
				break;
			case 6:
				teo2_linha6();
				break;
			case 7:
				teo2_linha7();
				break;
			case 8:
				teo2_linha8();
				break;
			default: break;
		}	
	}
	function teo2_linha1()
	{
		$("#line1").css("background", "yellow");
		$("#simboloBotao").removeClass( "glyphicon-play" ).addClass( "glyphicon-forward" );
		$("#textoBotao").html("");

		var pilhaAtual = $("#pilha-execucao").html();
		var novaChamada = '<tr style="background: yellow; color: black; font-size: 0.8em;">';
        novaChamada += '<td id="chamada' + pilhaExecucao + '">' + pilhaExecucao + ' - ArestasArvore() = ???</td>';
        novaChamada += '</tr>';
		$("#pilha-execucao").html(novaChamada + pilhaAtual);

		if(pilhaExecucao > 1){
			var nomeChamada = "#chamada" + (pilhaExecucao - 1);
			$(nomeChamada).css("background", "blue");
			$(nomeChamada).css("color", "white");
		}

		pilhaExecucao++;

		linhaAntiga = 1;
		linhaAtual = 2;
	}
	function teo2_linha2() 
	{
		$("#line2").css("background", "yellow");
		n = node[0].length;
		if(n == 1)
			linhaAtual = 3;
		else
			linhaAtual = 4;
		linhaAntiga = 2;
	}
	function teo2_linha3()
	{
		$("#line3").css("background", "yellow");
		linhaAntiga = 3;
		linhaAtual = 8;
	}
	function teo2_linha4()
	{
		$("#line4").css("background", "yellow");
		linhaAtual = 5;
		linhaAntiga = 4;
	}
	function teo2_linha5()
	{
		$("#line5").css("background", "yellow");

		var numero_vizinhos = {};
		
		m = link[0].length;
		for(var i=0; i<m; i++){
			var source = link[0][i]["__data__"]["source"]["name"];
			var target = link[0][i]["__data__"]["target"]["name"];
			
			if (typeof numero_vizinhos[source] != 'undefined'){ 
				numero_vizinhos[source]++;
			}
			else {
				numero_vizinhos[source] =  1;
			}
			
			if (typeof numero_vizinhos[target] != 'undefined'){ 
				numero_vizinhos[target]++;
			}
			else {
				numero_vizinhos[target] =  1;
			}
			
		}

		var grau1 = [];
		for(var nomeVertice in numero_vizinhos){
			if(numero_vizinhos[nomeVertice] == 1){
				grau1.push(nomeVertice);
			} 
		}

		var size = grau1.length;
		verticeEscolhido = Math.floor( Math.random()*size );
		verticeEscolhido = grau1[verticeEscolhido];

		n = node[0].length;
		for(var i=0; i<n; i++){
			if(node[0][i]["__data__"]["name"] == verticeEscolhido){
				//Mudar o tamnanho do raio
				node[0][i]["childNodes"][0]["attributes"]["r"]["value"] = 8;
				//Mudar a cor do círculo
				node[0][i]["childNodes"][0]["attributes"]["fill"]["value"] = "green";
			}
		}		

		linhaAtual = 6;
		linhaAntiga = 5;
	}
	function teo2_linha6(){
		$("#line6").css("background", "yellow");

		n = node[0].length;
		console.log(node[0]);

		for(var i=0; i<n; i++){
			if(typeof node[0][i] != 'undefined'){
				if(node[0][i]["__data__"]["name"] == verticeEscolhido){
					//Remover o vértice
					node[0][i]["innerHTML"] = '';
					node[0].splice(i, 1);
				}
			}else console.log("Vértice considerado indefinido.");
		}

		var i=0;
		for(; i<m; i++){
			var source = link[0][i]["__data__"]["source"]["name"];
			var target = link[0][i]["__data__"]["target"]["name"];
			
			if(source == verticeEscolhido || target == verticeEscolhido)
				break;
		}

		//Remover a aresta
		link[0][i]["style"]["visibility"] = 'hidden';
		link[0].splice(i, 1);

		linhaAtual = 7;
		linhaAntiga = 6;
	}
	function teo2_linha7()
	{
		$("#line7").css("background", "yellow");

		linhaAtual = 1;
		linhaAntiga = 7;

		if(desempilhar){
			retornoFuncao += 1;
			linhaAtual = 8;
			linhaAntiga = 7;
		}
	}
	function teo2_linha8()
	{
		$("#line8").css("background", "yellow");

		linhaAtual = 1;
		linhaAntiga = 7;

		if(pilhaExecucao > 1){

			pilhaExecucao--;
			desempilhar = true;
			
			linhaAtual = 7;
			linhaAntiga = 8;
			var nomeChamada = "#chamada" + (pilhaExecucao);
			$(nomeChamada).css("background", "green");
			$(nomeChamada).css("color", "white");

			var textoChamada = $(nomeChamada).html();
			textoChamada = textoChamada.substring(0, textoChamada.length - 3);
			
			textoChamada += retornoFuncao;
			$(nomeChamada).html(textoChamada);

			nomeChamada = "#chamada" + (pilhaExecucao - 1);
			$(nomeChamada).css("background", "yellow");
			$(nomeChamada).css("color", "black");
		}

		if(desempilhar && pilhaExecucao==1){
			$("#simboloBotao").removeClass( "glyphicon-forward" ).addClass( "glyphicon-stop" );
			$("#textoBotao").html("Fim da animação");
			$("#comecarAnimacao-teo-1").prop("disabled", true);

			alert("A quantidade de arestas nesta árvore é " + retornoFuncao + ".");
		}
	}


	//NÚMERO DE ARESTAS E VÉRTICES
	//console.log(link[0][0]["attributes"]);
	//link[0][0]["attributes"]["stroke"]["nodeValue"] = 'yellow';

	//console.log(node[0].length);

	//PINTURA DE VÉRTICES
	//node[0][0]["innerHTML"] = '<circle r="5" fill="blue"></circle><text x="10" y="8" font-family="Verdana" fill="#FCF4DC" font-size="1em" text-anchor="end">v1</text>';

	//REMOÇÃO DE VÉRTICES
	//node[0][3]["innerHTML"] = '';
	//node[0].splice(3, 1);

	//REMOÇÃO DE ARESTAS
	//console.log(link[0][3]["__data__"]["source"]["name"]);
	//link[0].splice(3, 1);
	//link[0].splice(2, 1);
});