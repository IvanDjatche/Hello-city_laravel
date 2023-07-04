<!-- extends permet d'heriter du layout de base ayant pour nom master  -->
@extends('master')

<!-- section permet de cree du contenu en fonction des diff pages grace a yield du layout de base  -->
@section('content')

        <h1> Hello from Ouest Region Of Cameroun!!</h1>
         <!-- use the date function for display the currently time -->
        <p> It's currently {{ date('h:i:s A')}}.</p>

@endsection

