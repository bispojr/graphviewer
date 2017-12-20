    <div id="demonstracao" class="tab-pane fade">                
       <h3>Prova:</h3>

      <p>
        A indução será feita sobre o número de arestas $m$ do grafo.
      </p>

      <h3>Caso Básico:</h3>
      
      <p>
        Se um grafo não tiver arestas, então cada vértice terá grau $0$. Como todos os vértices têm grau $0$, então a soma dos graus será $0$ (que é o dobro do número de arestas). 
      </p>

      <p>Logo, a afirmação é verdadeira para $m = 0$.</p>

      <h3>Hipótese da Indução:</h3>  

      <p>
        Agora suponha que $m>0$ e que o teorema seja verdadeiro sempre que o grafo tiver $m-1$ arestas. Seja $a$ uma aresta de $G$, e $G'$ o grafo (no mesmo conjunto de vértices de $G$) que obtemos excluindo $a$ de $A_G$. Então, $G'$ tem $m-1$ arestas e, portanto, pela hipótese da indução, a soma dos graus dos vértices de $G'$ é $2(m-1)$.<br>
      </p> 

      <h3>Passo da Indução:</h3>

      <p>
        Ora $a$ tem exatamente duas extremidades distintas. Podemos concluir que exatamente dois vértices de $G'$ têm um grau a menos que seu correspondente em $G$. Assim, a soma dos graus dos vértices em $G'$ é dois a menos que a soma dos graus dos vértices em $G$. Portanto, a soma dos graus dos vértices em $G$ é 

        <div class="text-center">
          $ \underbrace{2(m-1)}_{\mbox{em relação a } G'} + 2   = 2m - 2 + 2 $
        </div>

        e

        <div class="text-center">
          $ 2m - 2 + 2 = 2m$
        </div>

        Assim, o fato de $G'$ ter $m-1$ arestas implica em $G$ ter $m$ arestas. Portanto, pelo princípio da indução matemática, a soma dos graus dos vértices de um grafo é o dobro do número de suas arestas $\blacksquare$
      </p>

    </div>