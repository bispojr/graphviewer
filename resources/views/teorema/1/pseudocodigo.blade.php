    <div id="pseudocodigo" class="tab-pane fade in active">
      <div class="row">
      <div class="col-md-8">
        <table class="table">
          <tr style="background: black; color: white;">
            <td>
              
            </td>
            <td>
              <b>Algoritmo:</b> SomaDosGraus(Grafo $g$)
            </td>
          </tr>
          <tr  id="line1">
            <td>
              1
            </td>
            <td>
              arestas $\leftarrow$ Arestas($g$)
            </td>
          </tr>
          <tr id="line2">
            <td>
              2
            </td>
            <td>
              <b>se</b> Tamanho(arestas) = 1 <b>então</b>
            </td>
          </tr>
          <tr id="line3">
            <td>3</td>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp; <b>retorne</b> 2 
            </td>
          </tr>
          <tr id="line4">
            <td>4</td>
            <td>
              <b>senão</b>
            </td>
          </tr>
          <tr id="line5">
            <td>5</td>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp; $a\leftarrow$ arestaQualquer($g$)
            </td>
          </tr>
          <tr id="line6">
            <td>6</td>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp; $h\leftarrow$ grafosemAresta($g$,$a$)
            </td>
          </tr>
          <tr id="line7">
            <td>7</td>
            <td>
              &nbsp;&nbsp;&nbsp;&nbsp; <b>retorne</b> ($2 +$ SomaDosGraus($h$))
            </td>
          </tr>
          <tr id="line8">
            <td>8</td>
            <td>
              <b>fim se</b>
            </td>
          </tr>
        </table>
      </div>
      <div class="col-md-4">
        <table class="table text-center">
          <tbody id="pilha-execucao">
            <tr style="background: black; color: white;">
              <th class="text-center">Pilha de Execução</th>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
     
      <!--<a class="btn btn-primary" href="{{ URL::to('/teste-d3') }}" role="button">
        <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
      </a>
      <button type="button" class="btn btn-primary" aria-label="Left Align">
        <span class="glyphicon glyphicon-backward" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-primary" aria-label="Left Align">
        <span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
      </button>
      <button type="button" class="btn btn-primary" aria-label="Left Align">
        <span class="glyphicon glyphicon-pause" aria-hidden="true"></span>
      </button>-->
      <!--<form class="text-right" method="post" action="{{ URL::to('/passo/comecar-animacao') }}">-->
          <button id="comecarAnimacaoTeo1" class="btn btn-primary">
            <span id="simboloBotao"class="glyphicon glyphicon-play"></span>
            <span id="textoBotao">Começar animação!</span>
            <input type="hidden" name="nodes" value="{{ $nodes }}">
            <input type="hidden" name="links" value="{{ $links }}">
          </button>
      <!--</form>-->

    </div>