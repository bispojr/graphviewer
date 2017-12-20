@extends('base')

@section('teorema-titulo', 'Teorema 2:')

@section('teorema-texto')
	 Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
@endsection

@section('teorema-descricao')
	<p>
		<b>Demonstração</b>
	</p>
				    
    <p>
    	<b>Caso Básico:</b>$P(0) = P(1)$: Toda árvore com um vértice tem zero arestas. Este passo é verdadeiro já que a única aresta que poderia existir seria uma aresta laço e, assim, haveria um ciclo. Como	árvores não possuem ciclos, logo não pode haver nenhuma aresta.<br>
		<b>Hipótese Indutiva:</b> Suponha que a fórmula seja verdadeira para $n = k, i.e., P(k)$ : Toda árvore com $k$ vértices tem $k ? 1$ arestas, $k \geq 1$. <br>
		<b>Passo Indutivo:</b> se a fórmula é verdadeira para $n = k$ então deve ser verdadeira para $n = k + 1, i.e., P(k) \rightarrow P(k + 1)$. \\			
		Deve-se mostrar $P(k + 1)$ : Toda árvore com $k + 1$ vértices tem $k$ arestas, $k \geq 1$.
		Seja uma árvore com $k$ vértices e $k-1$ arestas. Vamos acrescentar um vértice $v^\star$ ao grafo que representa essa árvore. Se esse vértice $v^\star$ não for conectado a nenhum vértice da árvore existente, então teremos uma floresta e não uma árvore. Logo, temos que acrescentar uma aresta para não termos uma floresta. Essa aresta deve ser incidente a $v^\star$ e a algum vértice da árvore $v_a$. O acréscimo dessa aresta mantém a propriedade da árvore (grafo acíclico), já que existe apenas um único caminho entre $v^\star$ e $v_a$ e, conseqüentemente, com qualquer outro vértice da árvore. Note que se acrescentarmos uma segunda aresta incidente a $v^\star$ e a um outro vértice da árvore passaremos a 14 ter um ciclo, o que deixa de caracterizar uma árvore. Ou seja, não podemos acrescentar mais de uma aresta incidente a $v^\star$.<br>			
		Assim, ao acrescentarmos um vértice à árvore com $k$ vértices e $k-1$ arestas, passaremos a ter uma
		árvore com $k + 1$ vértices e $k$ arestas

    </p>
@endsection