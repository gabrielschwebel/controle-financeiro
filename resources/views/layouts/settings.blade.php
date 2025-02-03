<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-50 dark:bg-gray-900">

        <!-- Botão fixado no canto inferior direito -->
        <div class="fixed bottom-4 end-4">
            <button id="menuButton"
                class="bg-blue-500 text-white p-4 rounded-full shadow-lg hover:bg-blue-600 transition-all">
                ☰
            </button>
        </div>

        <!-- Menu de opções que será mostrado ao clicar -->
        <div id="menuOptions" class="fixed bottom-20 right-4 hidden bg-white shadow-lg rounded-lg p-4 space-y-2">
            <div class="w-full flex flex-col justify-center gap-2">
                <a href="{{ route('create-entrada') }}">
                    <button class="block bg-gray-200 text-black p-2 rounded-lg hover:bg-gray-300 transition-all">Nova
                        entrada</button>
                </a>
                <button class="block bg-gray-200 text-black p-2 rounded-lg hover:bg-gray-300 transition-all">Nova
                    despesa</button>
            </div>
        </div>

        <script>
            // Exibe ou esconde o menu ao clicar no botão
            menuButton.addEventListener('click', (event) => {
                event.stopPropagation(); // Evita que o evento clique se propague
                menuOptions.classList.toggle('hidden'); // Alterna entre esconder e mostrar
            });

            // Fecha o menu ao clicar fora dele
            document.addEventListener('click', (event) => {
                // Verifica se o clique foi fora do botão ou do menu
                if (!menuButton.contains(event.target) && !menuOptions.contains(event.target)) {
                    menuOptions.classList.add('hidden'); // Esconde o menu
                }
            });
        </script>

        <livewire:layout.navigation />

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-row gap-3">
                    <div class="w-1/4">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="flex flex-col gap-2 justify-start">
                                <x-setting-link :href="route('home-origem-entrada')" :active="request()->routeIs(['home-origem-entrada','create-origem-entrada'])" wire:navigate>
                                   <span>Origens de entradas</span> 
                                </x-setting-link>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="w-3/4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                        {{ $slot }}

                    </div>
                </div>

            </div>

        </main>
    </div>
    
</body>

</html>
