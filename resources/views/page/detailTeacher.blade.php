@extends('layouts.app')

@section('content')
    <h1>Surnom des enseignants</h1>
    <p>Zone pour le menu</p>

    <h2>Détail : {{ $teacher->teaFirstName . $teacher->teaName }}</h2>
    <p>Surnom : {{ $teacher->teaNickName }}</p>
    <p>Origine : {{ $teacher->teaOrigin }}</p>

    <p>[ {{ //TODO Refer to the section name
    $teacher->sections_id }} +    <a href="modify.php">modifier</a> <a href="delete.php">supprimer</a> ]</p>

    <a href="{{ route('index') }}">retour a la page d'accueil</a>
@endsection