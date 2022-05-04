<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">

        {{--         
            <!--Authentication logic -->
            @include('auth.loginHeader')

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
         --}}


        <h2>Liste des enseignants</h2>

        <x-button-link>
            TEST
        </x-button-link>

        <button type="button" onclick="location.href='{{ route('teachers.create') }}'" value="va a la page ajouter un enseignant" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
            <a href={{ route('teachers.create') }}>Ajouter un Enseignant</a>          
        </button>

        <table>
            <thead>
                <tr>
                    <th>Nom et prénom</th>
                    <th>Surnom</th>
                    <th>Options</th>
                </tr>
            </thead>
            @foreach($teachers as $teacher)
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
                        <form action={{ route('teachers.destroy', $teacher->id) }}
                            method="POST">
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
