<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
         <header class="shadow-lg bg-[#D9C549]">
            <nav class="flex justify-between pt-4 p-4 items-center">
                <div>
                   <a href="#"><img width="80" src="img/logo.png" alt=""></a> 
                </div>
                <div>
                    @if (Route::has('login'))
                     <livewire:welcome.navigation />
                    @endif
                </div>
            </nav>
        </header>

         <main class="mt-6">
                      
         </main>
    </body>
</html>
