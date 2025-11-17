<?php

$itens = [
    ['href' => 'https://www.instagram.com/alesilvayx/', 'src' => '/img/Instagram_icon.png', 'alt' => 'Instagram Logo'],
    ['href' => 'https://wa.me/5511963826052/?text=oi', 'src' => '/img/whatsapp_icon.png', 'alt' => 'WhatsApp Logo'],
    // ['href' => '', 'src' => '/img/linkedin.png', 'alt' => 'Linkedin Logo'],
];


?>

<section class="flex flex-col-reverse gap-6 md:flex-row md:gap-x-3">
    <!-- Titulos e Descrição -->
    <div class="w-full md:w-2/3">
        <h1 class="text-3xl font-bold">Sobre mim</h1>
        <p class="text-xl leading-6 mt-6">
            Estudante do 4º semestre de Engenharia de Computação na UFGD, focado em desenvolvimento de software. 
            Possui conhecimentos em C++, Python e PHP, e busca aplicar essa base técnica na resolução de problemas
            complexos e no desenvolvimento de soluções eficientes.

        </p>
        <ul class="flex gap-x-3 mt-3">
            <!-- Links de redes sociais -->
            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank">
                        <img class="h-8 hover:animate-bounce" src="<?=$item['src']?>" alt="<?=$item['alt']?>" />
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Imagem -->
    <div class="w-full md:w-1/3 flex items-center justify-center">
        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="/img/avatar.png" alt="Alexandre Popov">
        </div>
    </div>
</section>