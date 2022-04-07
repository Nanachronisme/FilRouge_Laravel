@extends('layouts.app')

@section('content')
    <h1>Surnom des enseignants</h1>
    <p>Zone pour le menu</p>

    <h2>Détail : Prénom Nom</h2>
    <p>Surnom : [surnom]</p>
    <p>[Origine : phrase d'explication]</p>

    <p>[nom de la section +    <a href="modify.php">modifier</a> <a href="delete.php">supprimer</a> ]</p>

    <a href="{{ route('index') }}">retour a la page d'accueil</a>
@endsection