<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Book Wise</title>
</head>

<body class="bg-stone-950 text-stone-200">

    <header class="bg-stone-900">
        <nav class="mx-auto max-w-screen-lg flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">BookWise</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-emerald-600">Explorar</a></li>
                <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                    <?php if (isset($_SESSION['auth'])): ?>

                    <li><a href="/logout">Oi, <?= $_SESSION['auth']['name'] ?></a></li>

                <?php else: ?>

                    <li><a href="/login">Fazer Login</a></li>

                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">

        <?php require "views/{$view}.view.php"; ?>
        <!-- Estou requisitando de views a minha view, essa variavel view eu recupero da minha superglobal-->


    </main>

</body>

</html>