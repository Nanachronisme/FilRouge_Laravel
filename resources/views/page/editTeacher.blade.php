@extends('layouts.app')

@section('content')
<h2>modification d'un enseignant</h2>
<form method="post" action={{ route('teachers.update', $data['teacher']->id) }}>
    @csrf
   {{--
       since this route doesn't recognise POST methods, it can only accept a PUT method
       since we can't do a put method directly in PHP, we have to convert the POST to PUT
    --}} 
    @method('PUT')
    
    <p>
        <input type="radio" name="gender" value="F" {{ ($data['teacher']->teaGender == 'F') ? 'checked': '' }}>Femme
        <input type="radio" name="gender" value="M" {{ ($data['teacher']->teaGender == 'M') ? 'checked': '' }}>Homme
        <input type="radio" name="gender" value="O" {{ ($data['teacher']->teaGender == 'O') ? 'checked': '' }}>Autre
    </p>
    <p>
        <label for="lastName">Nom :</label>
        <input type="text" name="lastName" value="{{ $data['teacher']->teaName }}"/>
    </p>
    <p>
        <label for="firstName">Prénom :</label>
        <input type="text" name="firstName" value="{{ $data['teacher']->teaFirstName }}" />
    </p>
    <p>
        <label for="nickName">Surnom :</label>
        <input type="text" name="nickName" value="{{ $data['teacher']->teaNickName }}" />
    </p>
    <p>
        <label for="origin">Origine :</label>
        <textarea type="text" name="origin" value="{{ $data['teacher']->teaOrigin }}"></textarea>
    </p>
    <p>
        <select name="section">
            <option value="">Section</option>
            @foreach ( $data['sections'] as $section )
                <option value={{ $section->id }} 
                    {{ ($data['teacher']->section_id == $section->id) ? 'selected' :'' }}>
                        {{ $section->secName }}
                </option>         
            @endforeach

        </select>
    </p>
    <p>
        <input type="submit" name="btnSubmit" value="modifier" />
    </p>
    
</form>

<a href="{{ route('index') }}">retour a la page d'accueil</a>

@endsection