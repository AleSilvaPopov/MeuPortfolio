<?php
$tecnologias = [
    [
        'nome' => 'PHP',
        'xp' => 'Foco Principal',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg'
    ],
    [
        'nome' => 'C++',
        'xp' => 'Acadêmico',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/cplusplus/cplusplus-original.svg'
    ],
    [
        'nome' => 'Python',
        'xp' => 'Intermediário',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg'
    ],
    [
        'nome' => 'Tailwind',
        'xp' => 'Aplicando agora',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg'
    ],
    [
        'nome' => 'Git',
        'xp' => 'Uso diário',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg'
    ],
    [
        'nome' => 'HTML',
        'xp' => 'Praticando',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg'
    ],
    [
        'nome' => 'CSS',
        'xp' => 'Praticando',
        'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg'
    ],
];

$loop_infinito = array_merge($tecnologias, $tecnologias);
?>

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-marquee {
        display: flex;
        width: max-content;
        animation: scroll 30s linear infinite;
    }

    .group:hover .animate-marquee {
        animation-play-state: paused;
    }
</style>

<div class="py-10 overflow-hidden group">
    <h3 class="text-center text-xl font-bold mb-6 text-gray-800 dark:text-white">
        Minha Stack Tecnológica
    </h3>

    <div class="relative max-w-screen-lg mx-auto mask-image-gradient">

        <div class="flex animate-marquee gap-8">
            <?php foreach ($loop_infinito as $tech): ?>

                <div class="relative group/item flex flex-col items-center justify-center min-w-[80px] cursor-pointer transition-transform hover:scale-110">

                    <img src="<?= $tech['icon'] ?>" alt="<?= $tech['nome'] ?>" class="w-12 h-12 object-contain drop-shadow-md">

                    <span class="mt-2 text-sm font-medium text-gray-600 dark:text-gray-400"><?= $tech['nome'] ?></span>

                    <div class="absolute bottom-full mb-2 hidden group-hover/item:block w-max px-3 py-1 bg-black text-white text-xs rounded shadow-lg z-10">
                        <?= $tech['xp'] ?>
                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-black"></div>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>