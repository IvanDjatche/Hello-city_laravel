<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About-Us | Hello-City</title>

       
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     
    </head>

    <body>

        <p>Built with &hearts; By Ivan Djatche Jordan Dev Web Laravel Fulstack</p>
         <!-- use the date function for display the currently time -->
        <p><a href="{{ __('/') }}">Revenir à la page d'accueil</a></p>

        <footer>
        <!-- use the date function to display years -->
            <p>&copy; Copyright {{ date('Y')}} &middot; <a href="{{ __('about-us') }}">About-Us</a></p>
        </footer>  
    </body>
 
</html> 
