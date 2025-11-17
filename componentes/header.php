<?php

    $itens = [
        ['href' => '#projetos', 'texto' => 'Projetos'],
        ['href' => 'https://github.com/AleSilvaPopov' , 'texto' => 'Github'],
        ['href' => 'https://judge.beecrowd.com/pt/profile/1114399', 'texto' => 'Beecrow'],
    ];
?>

<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
    <!-- Logo -->
    <div class="font-bold text-xl text-cyan-600">
        🚀Meu portifólio...
    </div>

    <!-- links -->
    <div class="">
        <ul class="flex gap-x-3 font-medium text-gray-200">
            <?php $totalItens = count($itens);
                foreach($itens as $index => $item ):

                    $target = ($index >= $totalItens - 2) ? ' target="_blank"' : '';
                    ?>
                        <li>
                            <a href="<?=$item['href'] ?>" class="hover:underline"<?= $target ?>>
                                <?=$item['texto'] ?>
                             </a>
                        </li>   
            <?php endforeach; ?>
        </ul>
    </div>
</header>