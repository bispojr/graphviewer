    <div id="demonstracao" class="tab-pane fade">
      <h3>Prova:</h3>

      <p>
        A indução será feita sobre o número de vértices $n$ do grafo.
      </p>


      <h3>Caso Básico:</h3>

      <p>
       Toda árvore com um vértice tem zero arestas. Este passo é verdadeiro já que a única aresta que poderia existir seria uma aresta laço. Como o grafo simples (não-direcionado) não admite laços, logo não pode haver nenhuma aresta.
      </p>
      
      <h3>Hipótese da Indução:</h3>

      <p>
        Suponha que a fórmula seja verdadeira para $n = k$, isto é:

        <div class="text-center">
          "Toda árvore com $k$ vértices tem $k - 1$ arestas (para $k \geq 1$)".  
        </div>        
      </p>
      
      <h3>Passo da Indução:</h3>

      <p>
        Se a fórmula é verdadeira para $n = k$ então deve ser verdadeira para $n = k + 1$, isto é:

        <div class="text-center">
          "Toda árvore com $k + 1$ vértices tem $k$ arestas (para $k \geq 1$)".  
        </div>
      </p>

      <p>
        Deve-se provar a afirmação acima. Seja uma árvore $G$ com $k$ vértices e $k-1$ arestas. Vamos criar uma árvore $H$ a partir de $G$, acrescentando um vértice $v$. Se $v$ não for conectado a nenhum vértice de $G$, então $H$ será uma floresta e não uma árvore.
      </p> 

      <p>
        Logo, temos que acrescentar uma aresta para não termos uma floresta. Esta aresta deve ser incidente a $v$ e a algum outro vértice $w$ de $H$. O acréscimo dessa aresta mantém a propriedade da árvore para $H$ (grafo sem circuitos). Isto é verdade, pois existe apenas um único caminho entre $v$ e $w$ e, conseqüentemente, com qualquer outro vértice de $H$. 
      </p>

      <p>
        Note que se acrescentarmos uma segunda aresta incidente a $v$ e a um outro vértice de $H$, passaremos a ter um circuito, o que deixa de caracterizar uma árvore. Ou seja, não podemos acrescentar mais de uma aresta incidente a $v$.
      </p>

      <p>     
        Assim, ao acrescentarmos um vértice à árvore $G$ com $k$ vértices e $k-1$ arestas, passaremos a ter uma
        árvore $H$ com $k + 1$ vértices e $k$ arestas $\blacksquare$
      </p>

        
      </p>

    </div>