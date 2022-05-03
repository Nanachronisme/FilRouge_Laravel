@if (session()->has('success'))
    <div>
        {{-- Flash message for successful registration, the session key is used to recognise the "success" value --}}
        {{session('success')}}
    </div>
@endif