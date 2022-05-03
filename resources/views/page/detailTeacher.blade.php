<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

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
    <a href="{{ route('teachers.index') }}">retour a la page d'accueil</a>
</x-app-layout>
