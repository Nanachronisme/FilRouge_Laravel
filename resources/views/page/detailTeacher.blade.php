@extends('layouts.app')

@section('title', 'Détails Enseignant')

@section('content')
    <h1>Surnom des enseignants</h1>
    <p>Zone pour le menu</p>

    <h2>Détail : {{ $teacher->teaFirstName . $teacher->teaName }}</h2>
    <p>Surnom : {{ $teacher->teaNickName }}</p>
    <p>Origine : {{ $teacher->teaOrigin }}</p>

    <p>
        {{-- TODO Referto the sectionname --}}
        <p>Section : {{ $teacher->section->secName }} </p>

        <p>
            <a href={{ route('teachers.edit', $teacher->id) }}>modifier</a>

            <form method='POST' action={{ route('teachers.destroy', $teacher->id) }}>
                @csrf
                @method('DELETE')
                <input type="submit" value="supprimer">
            </form>
        </p>

    </p>
    <a href="{{ route('index') }}">retour a la page d'accueil</a>
@endsection
