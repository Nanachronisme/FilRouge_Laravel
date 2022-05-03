<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>Modification d'un enseignant</h2>

    <x-teacher-form method="PUT" route="{{ route('teachers.update', $teacher->id) }}" :teacher="$teacher" :sections="$sections" />

    <a href="{{ route('teachers.index') }}">retour a la page d'accueil</a>

</x-app-layout>
