@extends('template')

@section('conteudo')

	<div class="row">
  		<div class="col-md-6">
  			<div class="panel panel-default">
  				<div class="panel-heading">
				   <b>Teorema 1:</b>
				    Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
				</div>
				 <div class="panel-body">
				    
				 	<ul class="nav nav-tabs">
				    	<li role="presentation" class="ative"><a href="#">Pseudocódigo</a></li>
				    	<li role="presentation"><a href="#">Demonstração</a></li>
				    </ul>

				    <p>
				    	<b>Algoritmo:</b>
				    </p>
				    <p>
				    	SomaDosGraus(Grafo $g$) <br>
				    	arestas $\leftarrow$ Arestas($g$) <br>
				    	<b>se</b> Tamanho(arestas) = 1 <b>então</b> <br>
				    		&nbsp;&nbsp;&nbsp;&nbsp; retorne 2 <br>
				    	<b>senão</b> <br>
				    		&nbsp;&nbsp;&nbsp;&nbsp; $a\leftarrow$ arestaQualquer($g$) <br>					
							&nbsp;&nbsp;&nbsp;&nbsp; $h\leftarrow$ grafosemAresta($g$,$a$) <br>					
						<b>retorne</b> ($2 +$ SomaDosGraus($h$)) <br>
						<b>fim se</b>

				    </p>
				    <p><b>Demonstração</b></p>
				    
				    <p>
				    	<b>Caso Básico:</b> A indução será feita sobre o número de arestas de $G$. Se um grafo não tiver arestas, então cada vértice terá grau $0$ e a soma dos graus será $0$, que é o dobro do número de arestas. Logo, a afirmação é verdadeira para $|A_G| = 0$.<br>
						<b>Hipótese Indutiva:</b> Agora suponha que $|A_G|>0$ e que o teorema seja verdadeiro sempre que um grafo tiver $|A_G|-1$ arestas. Seja $a$ uma aresta de $G$, e $G'$ o grafo (no mesmo conjunto de vértices de $G$) que obtemos excluindo $a$ de $|A_G|$. Então, $G'$ tem $|A_{G}|-1$ arestas e, portanto, por nossa hipótese indutiva, a soma dos graus dos vértices de $G'$ é $2(|A_{G})|-1)$.<br> 
						<b>Passo Indutivo:</b> Ora $a$ tem exatamente duas extremidades distintas. Podemos concluir que exatamente dois vértices de $G'$ têm um grau a menos que seu correspondente em $G$. Assim, a soma dos graus dos vértices em $G'$ é dois a menos que a soma dos graus dos vértices em $G$. Portanto, a soma dos graus dos vértices em $G$ é <br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $2|A_G|-2+2=2|A(G)|$. <br>
						Assim, a verdade do teorema para grafos com $|A_G|-1$ arestas implica a verdade do teorema para grafos com $|A_G|$ arestas. Portanto, pelo princípio da indução matemática, a soma dos graus dos vértices de um grafo é o dobro do número de suas arestas.


				    </p>

				    <p>
				    	<b>Algoritmo 2: </b>
				    </p>

				    <p>
				    	ArestasArvore(Grafo $g$) <br>
				    	vertices $\leftarrow$ Vertices($g$) <br>
				    	<b>se</b> Tamanho(vertices) = 1 <b>então</b> <br>
				    		&nbsp;&nbsp;&nbsp;&nbsp; retorne 0 <br>
				    	<b>senão</b> <br>
				    		&nbsp;&nbsp;&nbsp;&nbsp; $v\leftarrow$ verticeGrauUm($g$) <br>					
							&nbsp;&nbsp;&nbsp;&nbsp; $h\leftarrow$ grafosemAresta($g$,$v$) <br>					
						<b>retorne</b> ($1+$ ArestasArvore($h$)) <br>
						<b>fim se</b>

				    </p>
				    <p><b>Demonstração</b></p>
				    <p>
				    	<b>Caso Básico:</b>$P(0) = P(1)$: Toda árvore com um vértice tem zero arestas. Este passo é verdadeiro já que a única aresta que poderia existir seria uma aresta laço e, assim, haveria um ciclo. Como	árvores não possuem ciclos, logo não pode haver nenhuma aresta.<br>
						<b>Hipótese Indutiva:</b> Suponha que a fórmula seja verdadeira para $n = k, i.e., P(k)$ : Toda árvore com $k$ vértices tem $k ? 1$ arestas, $k \geq 1$. <br>
						<b>Passo Indutivo:</b> se a fórmula é verdadeira para $n = k$ então deve ser verdadeira para $n = k + 1, i.e., P(k) \rightarrow P(k + 1)$. \\			
						Deve-se mostrar $P(k + 1)$ : Toda árvore com $k + 1$ vértices tem $k$ arestas, $k \geq 1$.
						Seja uma árvore com $k$ vértices e $k-1$ arestas. Vamos acrescentar um vértice $v^\star$ ao grafo que representa essa árvore. Se esse vértice $v^\star$ não for conectado a nenhum vértice da árvore existente, então teremos uma floresta e não uma árvore. Logo, temos que acrescentar uma aresta para não termos uma floresta. Essa aresta deve ser incidente a $v^\star$ e a algum vértice da árvore $v_a$. O acréscimo dessa aresta mantém a propriedade da árvore (grafo acíclico), já que existe apenas um único caminho entre $v^\star$ e $v_a$ e, conseqüentemente, com qualquer outro vértice da árvore. Note que se acrescentarmos uma segunda aresta incidente a $v^\star$ e a um outro vértice da árvore passaremos a 14 ter um ciclo, o que deixa de caracterizar uma árvore. Ou seja, não podemos acrescentar mais de uma aresta incidente a $v^\star$.<br>			
						Assim, ao acrescentarmos um vértice à árvore com $k$ vértices e $k-1$ arestas, passaremos a ter uma
						árvore com $k + 1$ vértices e $k$ arestas

				    </p>


				 </div>
			</div>
  		</div>
  		<div class="col-md-6">
  			<div class="panel panel-default">
  				<div class="panel-heading">
				    <h3 class="panel-title">Parte "pratica"</h3>
				</div>
			  <div class="panel-body">
			    Parte Visual
			  </div>
			</div>
  		</div>
	</div>

@endsection