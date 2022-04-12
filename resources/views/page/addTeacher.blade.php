@extends('layouts.app')

@section('title', 'Ajouter Enseignant')

@section('content')

    <h2>ajout d'un enseignant</h2>

    <x-teacher-form route="{{route('teachers.store')}}" :sections="$sections" />
    
    <a href="{{ route('index') }}">retour a la page d'accueil</a>
        
@endsection