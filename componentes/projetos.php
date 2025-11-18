<?php
$projetos = [
    [
        "titulo" => "Meu Portfólio",
        "ano" => 2025,
        "finalizado" => false,
        "descricao" => "Portfólio pessoal desenvolvido com HTML para a estrutura, CSS para o design 
                visual, e PHP para a lógica de backend e funcionalidades dinâmicas.",
        "stack" => ["PHP", "HTML", "CSS", "JS"],
        "img" => "/img/portfolio.png",
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
        "img" => "/img/grafo1.png",
    ],
];

$stacks_unicas = [];
foreach ($projetos as $projeto) {
    $stacks_unicas = array_merge($stacks_unicas, $projeto['stack']);
}
$stacks_unicas = array_unique($stacks_unicas);

$filtro_ativo = $_GET['filtro'] ?? '';
?>

<div class="mb-6 flex flex-wrap gap-2 items-center">
    <span class="font-semibold text-white">Filtrar por:</span>

    <a href="index.php#projetos"
        class="px-3 py-1 text-sm rounded-full border transition-all duration-300
       <?= empty($filtro_ativo) ? 'bg-white text-black font-bold border-white' : 'bg-transparent text-white border-white hover:bg-white hover:text-black' ?>">
        Todos
    </a>

    <?php foreach ($stacks_unicas as $stack): ?>
        <?php
        $link_filtro = '?filtro=' . urlencode($stack) . '#projetos';

        $is_active = ($filtro_ativo === $stack);
        ?>
        <a href="<?= $link_filtro ?>"
            class="px-3 py-1 text-sm rounded-full border transition-all duration-300
           <?= $is_active ? 'bg-white text-black font-bold border-white' : 'bg-transparent text-white border-white hover:bg-white hover:text-black' ?>">
            <?= $stack ?>
        </a>
    <?php endforeach; ?>
</div>

<div class="space-y-3">
    <?php
    $delay = 0;

    foreach ($projetos as $projeto):
        if (!empty($filtro_ativo) && !in_array($filtro_ativo, $projeto['stack'])) {
            continue;
        }

        $delay += 150;
    ?>

        <!-- Projeto -->
        <div
            class="bg-white text-black rounded-lg flex flex-col md:flex-row p-3 md:items-center gap-4 border border-black"
            data-aos="fade-up"
            data-aos-delay="<?= $delay ?>">

            <div class="w-full md:w-1/5 flex items-center justify-center **p-2**">
                <img src="<?= $projeto['img'] ?>" class="**h-32 md:h-full max-h-40** **object-contain**" alt="<?= $projeto['titulo'] ?>">
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
                        $cores = ['gray', 'neutral', 'slate', 'stone', 'zinc'];
                        $text_colors = ['black'];
                        foreach ($projeto['stack'] as $posicao => $linguagem): ?>
                            <span class="bg-<?= $cores[$posicao] ?>-400 text-<?= $text_colors[0] ?> rounded-md px-2 py-1 font-semibold text-xs">
                                <?= $linguagem ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <p class="leading-6">
                    <?= $projeto['descricao'] ?>
                    <?php if ($projeto['link'] != 'null'): ?>
                        <a href=<?= $projeto['link'] ?> class="block hover:underline" target="_blank">Acessar todo o projeto.</a>
                    <?php endif ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>

</div>