<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- TITLE --}}
    <title>Erilene Bolos</title>
    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="h-full w-full font-REM font-normal">
    <section class="bg-[#001925] w-full h-screen">
        <header class="container relative justify-center flex pt-9 text-2xl items-center">
            <div class="absolute left-0">
                <h1 class="uppercase text-pink-600">Erilene <span class="text-white">Bolos</span></h1>
            </div>
            <nav class="flex gap-16">
                <a class="text-[#9BB9CB] font-light text-lg hover:text-pink-600" href="#">Sobre</a>
                <a class="text-[#9BB9CB] font-light text-lg" href="#">Galeria</a>
                <a class="text-[#9BB9CB] font-light text-lg" href="#">Produtos</a>
                <a class="text-[#9BB9CB] font-light text-lg" href="#">Contatos</a>
            </nav>
            <ul class="absolute right-0 top-8  p-10 gap-6 flex flex-col items-center bg-[#002834]">
                <a class="text-[#9BB9CB] peer" href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="text-[#9BB9CB]" href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a class="text-[#9BB9CB]" href="#"><i class="fa-regular fa-envelope"></i></a>
                <a class="text-[#9BB9CB]" href="#"><i class="fa-regular fa-envelope"></i></a>
                <span
                    class="absolute rotate-90 peer-hover:bottom-24 transition-all bg-pink-600 -bottom-5 text-base pt-2 px-5 pb-1 font-medium w-40">CONTATE-ME</span>
            </ul>

        </header>
    </section>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
</body>

</html>
