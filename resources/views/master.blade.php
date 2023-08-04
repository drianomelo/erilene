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

<body class="w-full h-full font-normal font-REM">
    <section class="bg-[#001925] w-full h-[90vh]">
        <header class="container relative flex items-center justify-center text-2xl pt-9">
            <div class="absolute left-0">
                <h1 class="text-pink-600 uppercase">Erilene <span class="text-white">Bolos</span></h1>
            </div>
            <nav class="flex gap-16">
                <a class="text-[#9BB9CB] font-light text-lg  duration-200  flex items-center group hover:text-pink-600 hover:-translate-x-2 relative "
                    href="#">Sobre<i
                        class="absolute text-pink-600 duration-200 opacity-0 bottom-2 -right-10 fa-solid fa-cake-candles group-hover:opacity-100 group-hover:-translate-x-4"></i></a>
                <a class="text-[#9BB9CB] font-light text-lg  duration-200  flex items-center group hover:text-pink-600 hover:-translate-x-2 relative "
                    href="#">Galeria<i
                        class="absolute text-pink-600 duration-200 opacity-0 bottom-2 -right-10 fa-solid fa-cake-candles group-hover:opacity-100 group-hover:-translate-x-4"></i></a>
                <a class="text-[#9BB9CB] font-light text-lg  duration-200  flex items-center group hover:text-pink-600 hover:-translate-x-2 relative "
                    href="#">Produtos<i
                        class="absolute text-pink-600 duration-200 opacity-0 bottom-2 -right-10 fa-solid fa-cake-candles group-hover:opacity-100 group-hover:-translate-x-4"></i></a>
                <a class="text-[#9BB9CB] font-light text-lg  duration-200  flex items-center group hover:text-pink-600 hover:-translate-x-2 relative "
                    href="#">Contatos<i
                        class="absolute text-pink-600 duration-200 opacity-0 bottom-2 -right-10 fa-solid fa-cake-candles group-hover:opacity-100 group-hover:-translate-x-4"></i></a>
            </nav>
            <div class="absolute z-50 right-0 top-8  p-10 gap-6 flex flex-col items-center bg-[#002834]">
                <a class="text-[#9BB9CB] hover:text-pink-600 transition-colors duration-300 peer/instagram"
                    href="#"><i class="fa-brands fa-instagram"></i></a>
                <a class="text-[#9BB9CB] hover:text-pink-600 transition-colors duration-300 peer/whatsapp"
                    href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a class="text-[#9BB9CB] hover:text-pink-600 transition-colors duration-300" href="#"><i
                        class="fa-regular fa-envelope"></i></a>
                <a class="text-[#9BB9CB] hover:text-pink-600 transition-colors duration-300" href="#"><i
                        class="fa-regular fa-envelope"></i></a>
                <span
                    class="absolute w-40 px-5 pt-2 pb-1 text-base font-medium transition-all duration-300 rotate-90 bg-pink-600 peer-hover/instagram:bottom-24 peer-hover/whatsapp:bottom-10 -bottom-5">CONTATE-ME</span>
            </div>
        </header>
        <div class="container relative pt-32 calc-100-64">
            <div class="bg-[#002834] w-[250px] h-[350px] ">
            </div>
            <img class="absolute bottom-0 calc-100-128 left-3" src="{{asset('images/cake-home.png')}}" alt="Foto bolo">
        </div>
    </section>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
</body>

</html>
