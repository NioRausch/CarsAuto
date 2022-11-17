<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased bg-dark-blue h-full">
    <div class="flex h-full">
        <div class="w-full h-full ">

            <div class="w-full ml-auto mr-auto   bg-light-blue">
                <!-- Contatos -->
                <div class="w-full h-14 mx-auto flex shadow-md">
                    <div class="ml-12 m-4 w-1/2 flex ">
                        <div class="space-x-3 select-none">
                            <i class="bi bi-facebook hover:cursor-pointer "></i>
                            <i class="bi bi-twitter hover:cursor-pointer"></i>
                            <i class="bi bi-instagram hover:cursor-pointer"></i>
                            <i class="bi bi-youtube hover:cursor-pointer"></i>
                            <i class="bi bi-pinterest hover:cursor-pointer"></i>
                        </div>
                        <i class="bi bi-telephone-fill ml-10 mr-2 mt-1"></i>
                        (xx) xx xxxxxxxxxx
                    </div>

                    <div class="w-90 m-4 w-1/2 flex text-right">
                        <i id="theme-button" class="bi bi-lightbulb hover:cursor-pointer hover:text-light ml-auto select-none mr-2	"></i>

                        <script src="{{ asset('js/theme-change.js') }}"></script>

                    </div>
                </div>


                <!-- Logo  -->
                <div class="w-full h-24 ">
                    <div id="logo" class="mt-auto mb-auto h-[110px] flex hover:cursor-pointer">
                        <svg class="h-[110px] ml-12  mr-6 fill-red_t " viewBox="0 0 256.00007 256.00002">
                            @include(" templates.logo2") </svg>

                        <h3 class="text-3xl mt-8 mb-auto font-bold h-7 logo">Cars Auto</h3>
                    </div>

                </div>

            </div>

            <div class="flex h-full">
                <div class="bg-light-blue w-[400px] h-full">
                    <form action="">
                        <div class="ml-4 mr-4">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquise Carro, Marcas..." required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Pesquisar</button>
                            </div>
                        </div>


                        <!--<div class="m-3 mt-10 p-3 border rounded-md ">

                            <p class="text-sm font-bold mb-3 text-gray-800">
                                Carros
                            </p>

                            <div class="flex items-center mb-4">
                                <input id="default-checkbox" name="usados" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600">Usados</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-600">Novos</label>
                            </div>
                        </div>-->

                        <div class="m-3 mt-5 p-3 border rounded-md ">

                            <p class="text-sm font-bold mb-3 text-gray-800">
                                Preço
                            </p>

                            <div class="flex">

                                <div class="relative z-0 mr-3">
                                    <input type="text" name="preco_min" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">De</label>
                                </div>

                                <div class="relative z-0 ml-3">
                                    <input type="text" name="preco_max" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Até</label>
                                </div>
                            </div>
                        </div>

                        <div class="m-3 mt-5 p-3 border rounded-md ">

                            <p class="text-sm font-bold mb-3 text-gray-800">
                                Quilometragem
                            </p>

                            <div class="flex">

                                <div class="relative z-0 mr-3">
                                    <input type="text" name="km_min" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">De</label>
                                </div>

                                <div class="relative z-0 ml-3">
                                    <input type="text" name="km_max" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Até</label>
                                </div>
                            </div>
                        </div>

                        <div class="m-3 mt-5 p-3 border rounded-md ">

                            <p class="text-sm font-bold mb-3 text-gray-800">
                                Ano
                            </p>

                            <div class="flex">

                                <div class="relative z-0 mr-3">
                                    <input type="text" name="ano_min" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">De</label>
                                </div>

                                <div class="relative z-0 ml-3">
                                    <input type="text" name="ano_max" id="floating_standard" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Até</label>
                                </div>
                            </div>
                        </div>

                    </form>


                </div>

                <div class="w-full h-full p-10 grid grid-cols-5 gap-3 ">
                    <div class="hover:scale-105  shadow-inner bg-light-blue h-96 w-60 p-0 border-solid
                     rounded drop-shadow-lg hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-75" onclick="href('/carro/create')">
                        <img class="w-full h-44 object-cover rounded-md" src="{{ asset('imgs/image-placeholder-base.jpg') }}">
                        <div class="flex h-30">

                            <h2 class="w-full h-[4.5rem] text-center mt-20 text-2xl font-bold overflow-hidden text-slate-700">
                                Adicionar Carro

                            </h2>
                        </div>
                    </div>

                    <x-carro-view id="1" />
                </div>

            </div>

        </div>
    </div>

    <script>
        function href(url) {
            location.href = url;
        }
    </script>
</body>

</html>