@extends('layouts.app')

@section('title', 'Modifier Enseignant')

@section('content')

    <h2>modification d'un enseignant</h2>

    <x-teacher-form method="PUT" route="{{ route('teachers.update', $teacher->id) }}" :teacher="$teacher" :sections="$sections" />

    <a href="{{ route('index') }}">retour a la page d'accueil</a>

@endsection