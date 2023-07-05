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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     
    </head>

    <body>

        <!-- yield cree un bloc ou une section content qui sera utilisé au niveau des pages pour cree le contenu en fonction de la page -->
        @yield('content')
        
        <footer>
        <!-- use the date function to display years -->
            <p>&copy; Copyright {{ date('Y')}} &middot;
                   <a href="{{ route('app_about') }}">About-Us</a>
            </p>
        </footer>  
    </body>
 
</html> 
