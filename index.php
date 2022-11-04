<?php 
    include('./auth/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eStante | Qual obra você vai retirar da eStante hoje?</title>

    <link rel="shortcut icon" href="./static/assets/icon.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./static/style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="bg-slate-50 flex flex-col min-h">
        <header class="p-3 bg-white border border-b-1 border-slate-100 drop-shadow-sm">
            <div class="flex w-full justify-between max-w-7xl mx-auto items-center gap-8  md:gap-16 px-2">
                <a href="/">
                    <picture>
                        <source srcset="./static/assets/eStante.svg" media="(min-width: 768px)">

                        <img src="./static/assets/icon.svg" alt="eStante" class="w-9 md:w-fit">
                    </picture>
                </a>


                <div class="flex flex-col gap-2 flex-grow max-w-2xl">
                    <div
                        class="flex gap-2 border rounded-lg border-1 border-slate-300 py-1 px-2 input-container-effect relative ">
                        <label for="search" class="block"><img src="./static/assets/icons/search.svg" alt="Usuário"
                                class="h-6 my-auto "></label>
                        <input type="text" name="search" id="search"
                            class="outline-0 bg-transparent text-slate-500 w-full border-x-2 border-slate-200 mr-1 pr-1 px-1 text-sm md:text-base"
                            placeholder="Pesquisar...">
                        <select name="select"
                            class="text-sm outline-0 bg-transparent text-slate-500 text-sm md:text-base">
                            <option value="title" selected>Título</option>
                            <option value="author">Autor</option>
                            <option value="tags">Tags</option>
                        </select>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <div class="hidden md:flex flex-col justify-center items-end w-fit">
                        <span class="text-slate-700 text-sm md:text-base block leading-none">Fulano de tal</span>
                        <span class="block text-xs font-light text-slate-500 leading-none">Aluno</span>
                    </div>
                    <img src="./static/assets/profileFiller.png" alt="Fulano de Tal"
                        class="w-12 h-auto rounded-full border border-2 border-emerald-500">
                </div>
            </div>
        </header>

        <main class="w-full max-w-7xl mx-auto flex-grow my-8 md:my-16 px-2">
            <section class="flex flex-col p-8 rounded-lg bg-emerald-500 drop-shadow-sm">
                <strong class="block font-semibold text-3xl	md:text-4xl max-w-2xl text-slate-50 mb-6">Qual obra você vai
                    retirar da eStante hoje?</strong>
                <p class="block text-sm md:text-base text text-slate-200 max-w-2xl mb-2">Se os escritores escrevesse tão
                    descuidadamente como algumas pessoas falam, então adhasdh asdglaseuyt
                    [bn [pasdlgkhasdfasdf.</p>
                <span class="block text-slate-200 text-sm md:text-base font-semibold mb-6">Lemony Snicket</span>
                <a href="#collection"
                    class="flex gap-2 items-center py-2 px-4 text-sm md:text-base bg-slate-50 text-emerald-500 w-fit font-semibold rounded-md hover:gap-3">Explorar
                    o acervo <img src="./static/assets/icons/arrow-right.svg" alt="Seta"></a>
            </section>

            <section id="collection" class="my-16">
                <h2 class="font-semibold text-slate-700 text-2xl mb-4">Obras Populares</h2>
                <div class="swiper mySwiper px-16 h-min">
                    <div class="swiper-wrapper pb-16">
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="my-16">
                <h2 class="font-semibold text-slate-700 text-2xl mb-4">Sua Lista de Leitura</h2>

                <div class="swiper mySwiper px-16 h-min">
                    <div class="swiper-wrapper pb-16">
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                        <article class="swiper-slide rounded-lg overflow-hidden border drop-shadow-sm   ">
                            <img src="./static/assets/bookCoverFiller.png" alt="Capa: Livro tal"
                                class="object-cover w-full h-48">
                            <h3 class="text-base text-slate-700 mx-2 mt-4">Memórias Póstumas de Brás Cubas</h3>
                            <p class="text-sm font-light text-slate-600 mx-2 mb-4">Machado de Assis</p>
                            <a href="#"
                                class="flex items-center justify-center gap-2 hover:gap-3 py-2 text-emerald-600 border-t">Visitar
                                obra <img src="./static/assets/icons/arrow-right.svg" alt="Visitar"></a>
                        </article>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
        </main>

        <footer class="bg-emerald-500">
            <div class="w-full max-w-7xl mx-auto py-8 px-2 flex items-center justify-between">
                <div>
                    <img src="./static/assets/eStante-white.svg" alt="eStante" class="mb-4 md:mb-6">
                    <p class="text-xs text-slate-200 max-w-lg font-light">O eStante foi um projeto desenvolvido para a
                        Prática Profissional Integrada (PPI) da turma do 3º
                        ano do Curso Técnico em Informática Integrado ao Ensino Médio, no ano de 2022.</p>
                </div>
                <a href="#" class="hidden md:block p-2 bg-slate-50 rounded-md"><img src="./static/assets/icons/arrow-up.svg"
                        alt="De volta ao topo"></a>
            </div>
            <div class="flex justify-center items-center bg-slate-50 py-1">
                <p class="text-xs text-slate-600">Made with <img src="./static/assets/icons/heart.svg" alt="Love"
                        class="inline w-3"> by Amanda, Josué, Tobias and Wagner - 34/22
                </p>
            </div>
        </footer>
    </div>

    <script src="./static/scripts/inputEffect.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="./static/scripts/swiperSetup.js"></script>
</body>

</html>