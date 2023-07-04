<!-- extends permet d'heriter du layout de base ayant pour nom master  -->
@extends('master')

<!-- crete new section to update title : first method --> 
<!-- @section('title', 'About Us | Hello City')  -->
<!-- create new section to update title we use environment variable : second method -->
@section('title', 'About Us | '. env('APP_NAME'))
<!-- section permet de cree du contenu en fonction des diff pages grace a yield du layout de base  -->
@section('content')

        <p>Built with &hearts; By Ivan Djatche Jordan Dev Web Laravel Fulstack</p>
         <!-- use the date function for display the currently time -->
        <p><a href="{{ __('/') }}">Revenir à la page d'accueil</a></p>

@endsection


