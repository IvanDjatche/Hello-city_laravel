<!-- extends permet d'heriter du layout de base ayant pour nom master  -->
@extends('master')

<!-- section permet de cree du contenu en fonction des diff pages grace a yield du layout de base  -->
@section('content')

        <p>Built with &hearts; By Ivan Djatche Jordan Dev Web Laravel Fulstack</p>
         <!-- use the date function for display the currently time -->
        <p><a href="{{ __('/') }}">Revenir à la page d'accueil</a></p>

@endsection


