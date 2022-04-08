@extends('layouts.app')

@section('content')

        <h2>ajout d'un enseignant</h2>

        <form  action={{ route('teachers.store') }} method="POST">
            @csrf
            <p>
                <input type="radio" name="gender" value="w">Femme
                <input type="radio" name="gender" value="m">Homme
                <input type="radio" name="gender" value="o">Autre
            </p>
            <p>
                <label for="lastName">Nom :</label>
                <input type="text" name="lastName" />
            </p>
            <p>
                <label for="firstName">Prénom :</label>
                <input type="text" name="firstName" />
            </p>
            <p>
                <label for="surname">Surnom :</label>
                <input type="text" name="nickName" />
            </p>
            <p>
                <label for="origin">Origine :</label>
                <textarea type="text" name="origin"></textarea>
            </p>
            <p>
                <select name="section">
                    <option value="">Section</option>
                    <option value="1">Informatique</option>
                    <option value="2">Bois</option>
                    <option value="3">Electronique</option>
                </select>
            </p>
            <p>
                <input type="submit" name="btnSubmit" value="Ajouter" />
                <input type="submit" name="btnSubmit" value="Effacer" />
            </p>
        </form>
        
        <a href="{{ route('index') }}">retour a la page d'accueil</a>
        
@endsection