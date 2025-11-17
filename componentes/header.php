<?php

$itens = [
    ['href' => '#projetos', 'texto' => 'Projetos'],
    ['href' => 'https://github.com/AleSilvaPopov', 'texto' => 'Github'],
    ['href' => 'https://judge.beecrowd.com/pt/profile/1114399', 'texto' => 'Beecrow'],
];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex flex-col items-center gap-4 md:flex-row md:items-center md:justify-between">
    <!-- Logo -->
    <div class="font-bold text-xl text-black-600">
        🚀Alexandre Popov
    </div>

    <!-- links -->
    <div class="">
        <ul class="flex gap-x-3 font-medium text-white-900">
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