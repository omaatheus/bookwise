<?php 
$livros = [
    [
        "id" => 1,
        "titulo" => "Cartas de um diabo a seu aprendiz",
        "autor" => "C. S. Lewis",
        "descricao" => "Uma sátira brilhante em forma de cartas, onde um diabo experiente ensina seu aprendiz sobre como desviar os humanos do bem.",
        "avaliacao" => "⭐⭐⭐⭐⭐" 
    ],
    [
        "id" => 2,
        "titulo" => "O Hobbit",
        "autor" => "J. R. R. Tolkien",
        "descricao" => "A aventura de Bilbo Bolseiro em uma jornada inesperada pelo mundo da Terra-média.",
        "avaliacao" => "⭐⭐⭐⭐⭐"
    ],
    [
        "id" => 3,
        "titulo" => "1984",
        "autor" => "George Orwell",
        "descricao" => "Um clássico distópico que explora um futuro totalitário onde o governo controla todos os aspectos da vida.",
        "avaliacao" => "⭐⭐⭐⭐⭐" 
    ],
    [
        "id" => 4,
        "titulo" => "A Revolução dos Bichos",
        "autor" => "George Orwell",
        "descricao" => "Uma fábula política que critica regimes autoritários por meio da história de animais que tomam uma fazenda.",
        "avaliacao" => "⭐⭐⭐⭐⭐" 
    ],
    [
        "id" => 5,
        "titulo" => "O Pequeno Príncipe",
        "autor" => "Antoine de Saint-Exupéry",
        "descricao" => "Um conto poético e filosófico sobre amor, amizade e a essência da vida.",
        "avaliacao" => "⭐⭐⭐⭐⭐" 
    ],
    [
        "id" => 6,
        "titulo" => "Dom Casmurro",
        "autor" => "Machado de Assis",
        "descricao" => "Um clássico da literatura brasileira sobre ciúme, memória e ambiguidade, narrado por Bentinho.",
        "avaliacao" => "⭐⭐⭐⭐" 
    ],
    [
        "id" => 7,
        "titulo" => "A Culpa é das Estrelas",
        "autor" => "John Green",
        "descricao" => "Uma emocionante história de amor entre dois adolescentes que enfrentam o câncer.",
        "avaliacao" => "⭐⭐⭐⭐" 
    ],
    [
        "id" => 8,
        "titulo" => "O Código Da Vinci",
        "autor" => "Dan Brown",
        "descricao" => "Um thriller repleto de enigmas envolvendo arte, religião e sociedades secretas.",
        "avaliacao" => "⭐⭐⭐⭐" 
    ],
    [
        "id" => 9,
        "titulo" => "A Menina que Roubava Livros",
        "autor" => "Markus Zusak",
        "descricao" => "Narrado pela Morte, este romance conta a história de uma menina que encontra consolo nos livros durante a Segunda Guerra Mundial.",
        "avaliacao" => "⭐⭐⭐⭐⭐" 
    ]
];
?>


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
                <li><a href="/meus-livros.php" class="hover:underline">Meus Livros</a></li>
            </ul>
            <ul>
                <li><a class="hover:underline" href="/login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <h1 class="mt-6 font-bold text-lg">Explorar</h1>

        <div>
            <form class="w-full flex space-x-2 mt-6">
                <input type="text"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"
                    placeholder="Pesquisar" name="search" />
                <button type="submit">Ir</button>
            </form>
        </div>

        <section class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($livros as $livro): ?>
            <div class="p-2 rounded border-stone-800 border-2 bg-stone-900">

                

                <div class="flex">

                    <div class="w-1/3">Imagem</div>

                    <div>

                        <a href="/livro.php?id=<?=$livro['id'] ?>" class="font-semibold hover:underline"><?=$livro['titulo'] ?></a>
                        <div class="text-xs italic"><?=$livro['autor'] ?></div>
                        <div class="text-xs italic"><?=$livro['avaliacao']?></div>

                    </div>

                </div>

                <div class="text-sm"><?=$livro['descricao'] ?></div>

            </div>

            <?php endforeach; ?>
            
        </section>

    </main>

</body>

</html>