<?php
$projetos = [
    [
        "titulo" => "Meu Portfólio",
        "ano" => 2025,
        "finalizado" => false,
        "descricao" => "Portfólio pessoal desenvolvido com HTML para a estrutura, CSS para o design 
                visual, e PHP para a lógica de backend e funcionalidades dinâmicas.",
        "stack" => ["PHP", "HTML", "CSS"],
        "img" => "",
        "link" => "null",
    ],
    [
        "titulo" => "Algoritmo de Dijkstra",
        "ano" => 2025,
        "finalizado" => true,
        "descricao" => "Este projeto é uma implementação em C++ do algoritmo de Dijkstra, projetada para encontrar o caminho 
                mais curto entre dois estados brasileiros com base em uma matriz de adjacências. ",
        "link" => "https://github.com/AleSilvaPopov/Grafo-e-Dijkstra",
        "stack" => ["C++"],
        "img" => "/img/grafo.png",
    ],
];

?>


<?php foreach ($projetos as $projeto): ?>
    <!-- Projeto -->
    <div class="bg-white text-black rounded-lg flex flex-col md:flex-row p-3 md:items-center gap-4 border border-black">
        <div class="w-full md:w-1/5 flex items-center justify-center">
            <img src="<?= $projeto['img'] ?>" class="h-38" alt="">
        </div>
        <div class="w-full md:w-4/5 space-y-3">
            <div class="flex flex-col md:flex-row gap-3 md:justify-between">
                <h3 class="font-semibold text-xl text-center md:text-left">
                    <?php if ($projeto['finalizado']): ?>☑️<?php endif;  ?>
                    <?= $projeto['titulo'] ?>

                    <?php if ($projeto['finalizado']): ?>
                        <span class="text-xs text-black-400 opacity-50 italic">(Finalizado em <?= $projeto['ano'] ?>)</span>
                    <?php else: ?>
                        <span class="text-xs text-black-400 opacity-50 italic">(Em progresso-<?= $projeto['ano'] ?>)</span>
                    <?php endif;  ?>
                </h3>
                <div class="space-x-1 text-center md:text-right">
                    <?php
                    $cores = ['gray']; // Use apenas uma cor neutra
                    $text_colors = ['black']; // Use apenas uma cor neutra
                    foreach ($projeto['stack'] as $posicao => $linguagem): ?>
                        <span class="bg-<?= $cores[0] ?>-200 text-<?= $text_colors[0] ?> rounded-md px-2 py-1 font-semibold text-xs">
                            <?= $linguagem ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <p class="leading-6">
                <?= $projeto['descricao'] ?>
                <?php if ($projeto['link'] != 'null'): ?>
                    <a href=<?= $projeto['link'] ?> class="block" target="_blank">Acessar todo o projeto.</a>
                <?php endif ?>
            </p>
        </div>
    </div>
<?php endforeach; ?>