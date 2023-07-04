<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-City</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">     
    </head>

    <body>
        <h1> Hello from Ouest Region Of Cameroun!!</h1>
         <!-- use the date function for display the currently time -->
        <p> It's currently {{ date('h:i:s A')}}.</p>

        <footer>
        <!-- use the date function to display years -->
            <p>&copy; Copyright {{ date('Y')}} &middot;
                   <a href="{{ __('about-us') }}">About-Us</a>
            </p>
        </footer>  
    </body>
 
</html> 
