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

<body class="w-full h-full font-normal font-REM bg-[#072632]">
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
        <div class="container relative flex justify-between pt-32 calc-100-64">
            <div class="mr-[220px]">
                <div class="bg-[#002834] w-[250px] h-[400px] ">
                </div>
                <img class="absolute bottom-0 calc-100-140 left-3" src="{{ asset('images/cake-home.png') }}"
                    alt="Foto bolo">
            </div>
            <div class="z-50 flex flex-col">
                <div class="flex items-center mb-16">
                    <div class="w-64 rounded-full bg-[70%] h-12 bg-cake mr-4"></div>
                    <span class="text-pink-600">#Melhores bolos de Nossa Senhora da Glória</span>
                </div>
                <h2 class="font-normal leading-[1] text-white text-[5.5rem] w-[85%]">Sabor que faz a vida mais doce</h2>
                <p class="text-[#9BB9CB] w-[400px] self-end mr-16 -mt-6">Explore nossa seleção de bolos, onde a doçura
                    se funde à criatividade em cada
                    camada. Cada mordida é
                    um mergulho em sabores únicos, feitos para transformar ocasiões em momentos memoráveis.</p>
            </div>
            <div
                class="absolute right-0 w-40 h-40 bg-pink-600 border-[6px] rounded-full -bottom-10 border-[#001925] p-3 flex justify-center items-center">
                <img class=" animate-spin-slow" src="{{ asset('images/contate-rounded.svg') }}"
                    alt="Texto 'contate agora' duplicado">
                <i class="absolute text-4xl rotate-45 fa-solid fa-arrow-up"></i>
            </div>
            <div class="border-[6px] border-[#082934] shadow-2xl absolute bg-cake-pic-2 bg-cover w-56 h-72 -bottom-32 right-[300px] z-50 rotate-[15deg]"></div>
            <div class="border-[6px] border-[#082934] shadow-2xl absolute bg-cake-pic-1 bg-cover w-56 h-72 -bottom-[140px] right-[400px] rotate-[-15deg]"></div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/555bf53180.js" crossorigin="anonymous"></script>
</body>

</html>
