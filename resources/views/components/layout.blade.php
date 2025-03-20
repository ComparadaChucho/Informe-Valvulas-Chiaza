<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chiaza</title>
    <link rel="stylesheet" href="https://use.typekit.net/glh8qsd.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-nunito pb-20">
    <div>
        <nav class="px-10 font-myriad flex justify-between items-center rounded py-4 bg-white/10 border-b border-white/15">
            <div class="space-x-12 flex items-center">
                <div>
                    <a href="https://chiaza.com.ar/">
                        <img src="{{ Vite::asset('resources/images/Isologo_Chiaza_hor.png') }}" width="150" alt="">
                    </a>
                </div>
                <div>
                    <x-nav-link href="/" :active="request()->is('')">
                        Inicio
                    </x-nav-link>
                </div>
            </div>

            <div class="space-x-10 flex items-center">
                <div class="space-x-6">
                    <x-nav-link href="/valvula/crear" :active="request()->is('valvula/crear')">
                        Nueva Valvula
                    </x-nav-link>
                    <x-nav-link href="/valvulas" :active="request()->is('valvulas')">
                        Ver Valvulas
                    </x-nav-link>
                </div>
                <div class="space-x-6">
                    <x-nav-link href="/informe/crear" :active="request()->is('informe/crear')">
                        Nuevo Informe
                    </x-nav-link>
                    <x-nav-link href="/informes" :active="request()->is('')">
                        Ver Informes
                    </x-nav-link>
                </div>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>  
        
        <!--<footer class="mt-auto">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
                    © 2025 <a href="https://chiaza.com.ar/" class="hover:underline">Chiaza Servicios Industriales S.R.L.</a> | Todos los derechos reservados
                </span>
              </div>
        </footer>-->
    </div>
</body>
</html>