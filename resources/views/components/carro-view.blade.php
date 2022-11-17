<div class="hover:scale-105  shadow-inner bg-light-blue h-96 w-60 p-0 border-solid
                     rounded drop-shadow-lg hover:shadow-lg hover:cursor-pointer transition ease-in-out delay-75" onclick="href('/carro/{{$carro->id}}')">
    <img class="w-full h-44 object-cover " src="{{ asset('images/' . $carro->img_path) }}">
    <div class="h-30">

        <h2 class="w-full] text-left ml-2 mt-2 text-xl font-bold overflow-hidden text-slate-700">
            {{$carro->nome}}

        </h2>

        <h2 class="w-full h-[4.5rem] text-left ml-2 mt-2 text-sm font-bold overflow-hidden text-slate-500">
            {{$carro->modelo}}

        </h2>

        <div class="flex">

            <h2 class="text-left ml-2 mt-2 text-2xl font-bold overflow-hidden text-slate-900">
                R$ {{(int)$carro->preco}}

            </h2>

            <h2 class="text-left ml-auto mr-2 mt-4 text-sm font-bold overflow-hidden text-slate-500">
                {{$carro->km}} km

            </h2>
        </div>

        <hr class="mt-2">

        <h2 class="text-left ml-auto ml-2 mt-2 text-sm font-bold overflow-hidden text-slate-500">
            {{$carro->ano}}/{{$carro->ano_modelo}}

        </h2>
    </div>
</div>



<