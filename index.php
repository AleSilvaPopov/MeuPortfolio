<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexandre - Dev. Back-end</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/dev1.png">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
</head>

<body class="bg-black text-white">

    <?php include('./componentes/header.php'); ?>

    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">
        <!-- Hero -->
        <?php include('./componentes/hero.php'); ?>

        <!-- Projetos -->
        <section class="space-y-3 py-6" id="projetos">
            <h2 class="text-2xl font-bold">Meus Projetos</h2>
            <?php include('./componentes/projetos.php') ?>
        </section>
    </main>

    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-white px-3 pt-6 text-white-400 opacity-50 text-sm">
            @ Copyright <?= date('d M Y') ?>, Construido por mim mesmo ;) .
        </div>
    </footer>
</body>

</html>