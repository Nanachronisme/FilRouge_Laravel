<form method="post" action={{ $route }}>
    @csrf
   {{--
       since this route doesn't recognise POST methods, it can only accept a PUT method
       since we can't do a put method directly in PHP, we have to convert the POST to PUT
    --}}

    @isset($method)
        @method($method)        
    @endisset
    
    <p>
        <input type="radio" name="gender" value="F" {{ isset($teacher) && strtoupper($teacher->teaGender) == 'F' ? 'checked': '' }}>Femme
        <input type="radio" name="gender" value="M" {{ isset($teacher) && strtoupper($teacher->teaGender) == 'M' ? 'checked': '' }}>Homme
        <input type="radio" name="gender" value="O" {{ isset($teacher) && strtoupper($teacher->teaGender) == 'O' ? 'checked': '' }}>Autre
    </p>
    <p>
        <label for="name">Nom :</label>
        <input type="text" name="name" value="@isset($teacher){{ $teacher->teaName }} @endisset"/>
    </p>
    <p>
        <label for="firstName">Prénom :</label>
        <input type="text" name="firstName" value="@isset($teacher){{ $teacher->teaFirstName }} @endisset" />
    </p>
    <p>
        <label for="nickName">Surnom :</label>
        <input type="text" name="nickName" value="@isset($teacher){{ $teacher->teaNickName }} @endisset" />
    </p>
    <p>
        <label for="origin">Origine :</label>
        <textarea type="text" name="origin" value="@isset($teacher){{ $teacher->teaOrigin }} @endisset"></textarea>
    </p>
    <p>
        <select name="section">
            <option value="">Section</option>
            @foreach ( $sections as $section )
                <option value="{{ $section->id }}" 
                    @isset($teacher)
                        {{ ($teacher->section_id == $section->id) ? 'selected' :'' }}
                    @endisset>
                
                    {{ $section->secName }}
                </option>         
            @endforeach

        </select>
    </p>
    <p>
        {{-- TODO change find a way to request current route with more elegance --}}
        <input type="submit" name="btnSubmit" value="{{ str_contains(request()->route()->getName(), 'edit') ? 'Modifier' : 'Ajouter' }}" />
    </p>

    {{-- Error Messages --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">
                {{ $error }}
            </p>
        @endforeach
    @endif

</form>