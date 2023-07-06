<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- update title in function page with use yield. we give Hello City as default title -->
                <!-- <title> @yield('title', 'Hello City')</title> -->

                <!-- usage des variables d'environement pour les titres de page : second method
                <title> @yield('title', env('APP_NAME'))</title> -->

                <!-- usage des fichier de configuration pour les titres de page : 3em method -->
                <title> @yield('title', config('app.name'))</title>

                <!-- using taiwindcss -->
                <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     
        </head>

    <body class="py-6 flex flex-col items-center justify-between min-h-screen">

                <!-- yield cree un bloc ou une section content qui sera utilisé au niveau des pages pour cree le contenu en fonction de la page -->
                <main role="main" class="flex flex-col justify-center items-center">
                    @yield('content')
                </main>

                <footer class="">
                    <!-- use the date function to display years -->
                    <p class="text-gray-400">
                        &copy; Copyright {{ date('Y')}} 
                        <!-- use if condition to display about link  -->
                        @if(! Route::is('app_about'))
                        &middot; <a href="{{ route('app_about') }}" class="text-indigo-400 hover:text-indigo-700 underline">About-Us</a>
                        @endif
                    </p>
                </footer>  
    </body>

</html> 
