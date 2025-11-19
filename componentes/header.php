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
    <div class="font-bold text-xl text-black dark:text-white">
        🚀Alexandre Popov
    </div>
    <button id="theme-toggle" class="fixed top-4 right-4 p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-white transition-colors duration-300 focus:outline-none shadow-lg z-50">
        <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>

        <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
        </svg>
    </button>
    <!-- links -->
    <div class="">
        <ul class="flex gap-x-3 font-medium text-black dark:text-white opacity-70">
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