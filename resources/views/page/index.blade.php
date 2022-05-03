<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <!--Authentication logic -->
        @include('auth.loginHeader')

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <h2>Liste des enseignants</h2>
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
