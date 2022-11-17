<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- SweetAlert2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased bg-dark-blue h-full">
    <div class="flex w-full h-full">
        <div class=" ml-auto mr-auto mb-auto mt-auto  border rounded-md bg-light-blue" style="width: 600px;">
            <img class="w-full  h-44 object-cover " src="{{ asset('images/' . $carro->img_path) }}">
            <h2 class="w-full] text-left ml-2 mt-2 text-xl font-bold overflow-hidden text-slate-700">
                {{$carro->nome}}

            </h2>
            <h2 class="w-full h-[4.5rem] text-left ml-2 mt-2 text-sm font-bold overflow-hidden text-slate-500">
                {{$carro->modelo}}
            </h2>
            <div class="w-full h-full p-3 grid grid-cols-3  gap-2 ">
                <div>
                    <h2 class="w-full  text-left  mt-2 text-md font-bold overflow-hidden text-slate-900">
                        Ano
                    </h2>
                    <h2 class="w-full  text-left   text-2sm font-bold overflow-hidden text-slate-500">
                        {{$carro->ano}}/{{$carro->ano_modelo}}
                    </h2>

                </div>

                <div>
                    <h2 class="w-full  text-left  mt-2 text-md font-bold overflow-hidden text-slate-900">
                        Km
                    </h2>
                    <h2 class="w-full  text-left   text-2sm font-bold overflow-hidden text-slate-500">
                        {{$carro->km}}
                    </h2>

                </div>

                <div>
                    <h2 class="w-full  text-left  mt-2 text-md font-bold overflow-hidden text-slate-900">
                        Cor
                    </h2>
                    <h2 class="w-full  text-left   text-2sm font-bold overflow-hidden text-slate-500">
                        {{$carro->cor}}
                    </h2>

                </div>

                <div>
                    <h2 class="w-full  text-left  mt-2 text-md font-bold overflow-hidden text-slate-900">
                        Combustivel
                    </h2>
                    <h2 class="w-full  text-left   text-2sm font-bold overflow-hidden text-slate-500">
                        {{$carro->combustivel}}
                    </h2>

                </div>

                <div>
                    <h2 class="w-full  text-left  mt-2 text-md font-bold overflow-hidden text-slate-900">
                        Combustivel
                    </h2>
                    <h2 class="w-full  text-left   text-2sm font-bold overflow-hidden text-slate-500">
                        {{$carro->combustivel}}
                    </h2>
                </div>
            </div>
            <hr class="mt-5 mb-5">

            <div class="flex">
                <h2 class="text-left ml-3 mt-2 text-2xl font-bold overflow-hidden text-slate-900">
                    Preco:
                </h2>
                <h2 class=" text-left ml-5  mt-2 mb-6 text-2xl font-bold overflow-hidden text-slate-900">
                    R$ {{(int)$carro->preco}}
                </h2>

                <div class="flex mr-4 ml-auto mt-1">

                    <div onclick="href('/carro/{{$carro->id}}/edit')" class="w-10 h-10 mr-2 bg-amber-500 text-slate-800 rounded-md shadow-md hover:cursor-pointer hover:bg-amber-600 transition ease-in-out delay-75  text-md font-bold pl-3 pr-3 p-2">
                        <i class="bi bi-gear-fill"></i>
                    </div>

                    <div onclick="delete_carro('{{$carro->id}}')" class="w-10 h-10  bg-red-500 text-slate-800 rounded-md shadow-md hover:cursor-pointer hover:bg-red-600 transition ease-in-out delay-75  text-md font-bold pl-3 pr-3 p-2">
                        <i class="bi bi-trash-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function href(url) {
                location.href = url;
            }

            function delete_carro(id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var ajxReq = $.ajax('/carro/' + id, {
                    type: 'DELETE'
                });

                ajxReq.done(function(data) {

                    Swal.fire(
                        'Carro deletado com sucesso!',
                        'Voltando...',
                        'success'
                    )

                    setTimeout(() => {
                        location.href = "/";
                    }, 1000);
                });
            }
        </script>
</body>

<