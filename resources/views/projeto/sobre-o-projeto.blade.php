@extends('projeto.template')

@section('texto-projeto')

	<h1>Sobre o projeto</h1>

	<hr>

	<p>
        A Educação de Computação (EC) é uma área fruto do encontro da Educação com a Ciência da Computação e outros campos de pesquisa. Ela endereça várias questões vivenciadas por profissionais de EC, tais como (i) métodos de ensino, (ii) avaliação e construção de currículo, e (iii) animação, visualização e simulação de algoritmos.
    </p>
    <p>
        Em relação aos métodos de ensino em EC, novas metodologias e métodos vêm sendo propostos. O intuito é aperfeiçoar o processo de ensino e aprendizagem em EC através do uso destes. Muitas destas abordagens têm como eixo norteador a aprendizagem ativa dos estudantes, ao invés do formato tradicional de ensino.
    </p>

    <p >
        Como instrumento auxiliar destes métodos, ferramentas de visualização de algoritmos (FVA) vêm sendo propostas. Estas auxiliam na visualização do passo-a-passo da execução de algoritmos por meio de algum recurso gráfico. Um dos objetivos do uso das FVAs em EC é a facilitação das atividades de abstração dos estudantes na compreensão de conceitos complexos.
    </p>
    <p>
        Na disciplina de Teoria dos Grafos (TG), várias FVAs foram propostas. Estas FVAs são utilizadas normalmente em ensino de algoritmos clássicos em TG (e.g. busca em largura e Bellman-Ford). Geralmente tanto o pseudocódigo, quanto o grafo, são apresentados simultaneamente durante a execução do algoritmo.
    </p>  
    <p>
        Porém uma das dificuldades encontradas por estudantes de TG está no momento de fornecer demonstrações a teoremas. Dificuldades estas que também são comuns a outros estudantes da área de exatas. Grande parte dos alunos, por exemplo, sente dificuldades em visualizar e utilizar de forma correta a demonstração por indução.
    </p>
    <p>
        Tendo em vista a carência de trabalhos que proponham uma FVA como recurso metodológico para o ensino de provas por indução em TG, é proposto a FVA GraphViewer para este fim. Desta forma, este trabalho apresenta a <em>GraphViewer</em> e o seu uso no ensino e aprendizagem de demonstração por indução em TG. É proposto um método de ensino e aprendizagem com intuito de auxiliar os alunos que tenham dificuldades no entendimento e compreensão tanto da técnica de demonstração por indução, quanto dos conceitos abordados na disciplina.
    </p>

	
@endsection