<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">

        {{-- <!--Authentication logic -->
            @include('auth.loginHeader')

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}


        <h2 class="font-semibold text-xl mb-4">Liste des enseignants</h2>

        <x-button-link href="{{ route('teachers.create') }}" class="mb-4">
            Ajouter un Enseignant
        </x-button-link>

        <div class="mb-12">
            <x-carousel></x-carousel>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 lg:grid-cols-4">
            @foreach ( $teachers as $teacher )
                <x-teacher-card name="{{  $teacher->teaFirstName . ' ' . $teacher->teaName }}" 
                                nickName="{{ $teacher->teaNickName }}" 
                                id="{{ $teacher->id }}"
                                class="block">
                </x-teacher-card>
            @endforeach
        </div>

        {{ $teachers->links() }}

        <table>
            <thead>
                <tr>
                    <th>Nom et prénom</th>
                    <th>Surnom</th>
                    <th>Options</th>
                </tr>
            </thead>
            @foreach ($teachers as $teacher)
                <tbody>
                    <tr>
                        <th>{{ $teacher->teaFirstName . ' ' . $teacher->teaName }}
                        </th>
                        <th>{{ $teacher->teaNickName }}</th>
                        <td>
                            <p>
                                <a href={{ route('teachers.show', $teacher->id) }}>
                                    View
                                </a>
                            </p>
                        </td>
                        <td>
                            <p>
                                <a href={{ route('teachers.edit', $teacher->id) }}>Edit</a>
                            </p>
                        </td>
                        <form action={{ route('teachers.destroy', $teacher->id) }} method="POST">
                            {{-- we need csrf since we're making a POST request --}}
                            @csrf
                            @method('DELETE')
                            <td>
                                <p><button type="submit">Supprimer</button></p>
                            </td>
                        </form>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</x-app-layout>
