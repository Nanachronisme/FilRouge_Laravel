<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h2>ajout d'un enseignant</h2>

    <x-forms.add-teacher route="{{route('teachers.store')}}" :sections="$sections" />
    
    <a href="{{ route('teachers.index') }}">retour a la page d'accueil</a>
        
</x-app-layout>
