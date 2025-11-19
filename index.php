<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandre - Dev. Back-end</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/dev1.png">
    </a>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"> -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
</head>

<body class="bg-white text-black dark:bg-black dark:text-white transition-colors duration-300">
    <?php include('./componentes/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- Hero -->
        <?php include('./componentes/hero.php'); ?>

        <?php include('./componentes/stack.php'); ?>

        <!-- Projetos -->
        <section class="space-y-3 py-6" id="projetos">
            <h2 class="text-2xl font-bold text-center text-black dark:text-white">Meus Projetos</h2>
            <?php include('./componentes/projetos.php') ?>
        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-white dark:border-white px-3 pt-6 text-white-400 pt-6 dark:text-black-400 opacity-50 text-sm">
            @ Copyright <?= date('d M Y') ?>, Construido por mim mesmo ;) .
        </div>
    </footer>

    <!-- 2. AOS JS (ADICIONADO) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // 3. Inicialização do AOS (ADICIONADO)
        AOS.init({
            // Atraso aplicado ao elemento (opcional, mas recomendado)
            delay: 200,
            // Desabilitar animações em dispositivos móveis (opcional)
            //disable: 'mobile',
            // Uma vez que o elemento é animado, ele não anima mais na subida (evita repetição)
            once: true,
        });
    </script>

    <script src="/darkmode.js"></script>
</body>

</html>