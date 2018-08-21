@extends('base')

@section('teorema-titulo', 'Teorema 1:')

@section('teorema-texto')
	 Dado um grafos G qualquer, a soma dos graus dos vértices é o dobro do número de arestas.
@endsection

@section('teorema-descricao')
	<p>
		<b>Demonstração</b>
	</p>
				    
    <p>
    	<b>Caso Básico:</b> A indução será feita sobre o número de arestas de $G$. Se um grafo não tiver arestas, então cada vértice terá grau $0$ e a soma dos graus será $0$, que é o dobro do número de arestas. Logo, a afirmação é verdadeira para $|A_G| = 0$.<br>
		<b>Hipótese Indutiva:</b> Agora suponha que $|A_G|>0$ e que o teorema seja verdadeiro sempre que um grafo tiver $|A_G|-1$ arestas. Seja $a$ uma aresta de $G$, e $G'$ o grafo (no mesmo conjunto de vértices de $G$) que obtemos excluindo $a$ de $|A_G|$. Então, $G'$ tem $|A_{G}|-1$ arestas e, portanto, por nossa hipótese indutiva, a soma dos graus dos vértices de $G'$ é $2(|A_{G})|-1)$.<br> 
		<b>Passo Indutivo:</b> Ora $a$ tem exatamente duas extremidades distintas. Podemos concluir que exatamente dois vértices de $G'$ têm um grau a menos que seu correspondente em $G$. Assim, a soma dos graus dos vértices em $G'$ é dois a menos que a soma dos graus dos vértices em $G$. Portanto, a soma dos graus dos vértices em $G$ é <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $2|A_G|-2+2=2|A(G)|$. <br>
		Assim, a verdade do teorema para grafos com $|A_G|-1$ arestas implica a verdade do teorema para grafos com $|A_G|$ arestas. Portanto, pelo princípio da indução matemática, a soma dos graus dos vértices de um grafo é o dobro do número de suas arestas.


    </p>
@endsection