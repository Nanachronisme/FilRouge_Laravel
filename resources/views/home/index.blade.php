
@extends('layouts.app')

@section('content')
    
    <!--
        autentification
    -->
    <form method="post" action="checkAuth.php">
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
        <tr>
            <th>Nom</th>
            <th>Surnom</th>
            <th>Options</th>
        </tr>
        <tr>
            <td>Muguet Henri</td>
            <td>Mumu</td>
            <td><p><a href="updateTeacher.php">modifier</a> <a href="delete.php">supprimer</a> <a href="detail.php">détail</a></p></td>
        </tr>
        <!--
            ca se repete donc faire qqch pour ca hihi
        -->
        <tr>
            <td>Fleur Carole</td>
            <td>Floris</td>
            <td><p><a href="updateTeacher.php">modifier</a> <a href="delete.php">supprimer</a> <a href="detail.php">détail</a></p></td>
        </tr>
    </table>

@endsection
