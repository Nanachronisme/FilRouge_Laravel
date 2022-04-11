@extends('layouts.app')

@section('content')
    <h1>Surnom des enseignants</h1>
    <p>Zone pour le menu</p>

    <h2>Détail : {{ $teacher->teaFirstName . $teacher->teaName }}</h2>
    <p>Surnom : {{ $teacher->teaNickName }}</p>
    <p>Origine : {{ $teacher->teaOrigin }}</p>

    <p>
        {{-- TODO Refertothesectionname --}}
        {{ $teacher-> }}

       <a href={{ route('teachers.edit', $teacher->id)}}>modifier</a> 

       <form  method='POST' action={{ route('teachers.destroy', $teacher->id)}}>
            @csrf
            @method('DELETE')
            <input type= "submit" value="supprimer">
        </form>
    </p>
    <a href="{{ route('index') }}">retour a la page d'accueil</a>
@endsection