<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Tipos de entrada
    </h2>
    
</x-slot>



<div>
    <div class="flex flex-row justify-between p-4 border-b items-center">
        <div></div>
        <div class="flex gap-2">
            <a href="{{route('create-origem-entrada')}}">
            <x-secondary-button>
                Nova Origem
            </x-secondary-button>
        </a>
        </div>
    </div>

    <div>
        <x-table>
            <x-slot name=header>
                @foreach ($headers as $header)
                <th class="px-4 py-4 ">{{ $header }}</th>
                @endforeach
            </x-slot>

            <x-slot name=rows>
                @if (count($origemEntrada) > 0)
                    @foreach ($origemEntrada as $item)
                    <tr class="border-b  hover:bg-gray-50 text-base">
                        <td class="px-4 py-4 ">nome</td>
                        <td class="px-4 py-4 ">Descrição</td>
                    </tr>        
                    @endforeach
                    @else
                <tr>
                    <td colspan="2" class="text-center py-3"> <span class="m-3"><i class="bi bi-inbox-fill mr-4"></i>Nenhuma origem encontrada</span></td>
                </tr>
                @endif
                
            </x-slot>
        </x-table>
    </div>
</div>
