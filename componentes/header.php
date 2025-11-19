<?php
// Captura o filtro atual da URL
$filtro_url = $_GET['filtro'] ?? '';

// Prepara o href do link "Projetos" para manter o filtro ativo, se houver.
$projetos_href = '#projetos';
if (!empty($filtro_url)) {
    // Adiciona o filtro na URL se o usuário navegar para "Projetos" de volta para o topo da página
    $projetos_href = '?filtro=' . urlencode($filtro_url) . '#projetos';
}

$itens = [
    ['href' => $projetos_href, 'texto' => 'Projetos'],
    ['href' => 'https://github.com/AleSilvaPopov', 'texto' => 'Github'],
    ['href' => 'https://www.linkedin.com/in/alexandre-popov-309a09399/', 'texto' => 'LinkedIn'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex flex-col items-center gap-4 md:flex-row md:items-center md:justify-between">
    <!-- Logo -->
    <div class="font-bold text-xl text-white">
        🚀Alexandre Popov
    </div>

    <!-- links -->
    <div class="">
        <ul class="flex gap-x-3 font-medium text-white opacity-80">
            <?php $totalItens = count($itens);
            foreach ($itens as $index => $item):

                $target = ($index >= $totalItens - 2) ? ' target="_blank"' : '';
            ?>
                <li>
                    <a href="<?= $item['href'] ?>" class="hover:underline" <?= $target ?>>
                        <?= $item['texto'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RH25FMJ02C"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-RH25FMJ02C');
    </script>
</header>