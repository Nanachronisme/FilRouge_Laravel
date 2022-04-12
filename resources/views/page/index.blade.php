
@extends('layouts.app')

@section('title', 'Liste Enseignants')

@section('content')
    
    <!--
        autentification
    -->
    <form method="post" action="">
        <p>
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" />
        </p>
        <p>
            <label for="password">Mot de passe :</label>
            <input type="text" name="password" id="password" />
        </p>
        <p>
            <input type="submit" name="btnSubmit" value="se connecter" />
        </p>
    </form>

    <h2>Liste des enseignants</h2>
    <table>
        <thead>
            <tr>
                <th>Nom et prénom</th>
                <th>Surnom</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach ($teachers as $teacher )
            <tbody>
                <tr>
                    <th>{{ $teacher->teaFirstName . ' ' . $teacher->teaName }}</th>
                    <th>{{ $teacher->teaNickName }}</th>
                    <td><p><a href={{ route('teachers.show', $teacher->id) }}>View</a></p></td>
                    <td><p><a href={{ route('teachers.edit', $teacher->id) }}>Edit</a></p></td>
                    <form action={{ route('teachers.destroy', $teacher->id)}} method="POST">
                        {{-- we need csrf since we're making a POST request  --}}
                        @csrf
                        @method('DELETE')
                        <td><p><button type="submit">Supprimer</button></p></td>
                    </form>
                </tr>
            </tbody>

        @endforeach
    </table>

@endsection
