<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Novo tipo de entrada
    </h2>
    <p>Preencha os campos abaixo para registrar um novo tipo de entrada</p>
</x-slot>



<form method="POST" action="{{route('store-origem-entrada')}}" class="p-3">
    @method('POST')
    @csrf
    <div class="flex flex-col">
        <label for="nome">nome</label>
        <input name="name" type="text" class="border border-gray-300 rounded-lg">
    </div>
    
        <x-primary-button class="w-full mt-3 text-center">
            salvar
        </x-primary-button>
    
    </form>
