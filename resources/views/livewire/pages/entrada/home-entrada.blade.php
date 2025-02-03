<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Entradas
    </h2>
</x-slot>



<div>
    <x-table>
        <x-slot name=header>
            @foreach ($headers as $header)
                <th class="px-4 py-4 ">{{ $header }}</th>
            @endforeach
        </x-slot>

        <x-slot name=rows>
            @foreach ($users as $user)
                <tr class="border-b  hover:bg-gray-50 text-base">
                    <td class="px-4 py-4 ">{{ $user->name }}</td>
                    <td class="px-4 py-4 font-normal">{{ $user->email }}</td>
                    <td class="px-4 py-4 font-normal">
                        <div class="flex flex-col">
                            <span>{{ $user->created_at->DiffForHumans() }}</span>
                            <span class="text-sm text-gray-300">{{ $user->created_at->format('d/m/y') }}
                                ({{ $user->created_at->format('H:i A') }})</span>
                        </div>
                    </td>
                </tr>
            @endforeach

        </x-slot>
    </x-table>
</div>
