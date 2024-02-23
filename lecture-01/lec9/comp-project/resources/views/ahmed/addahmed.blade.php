<h1> add new ahmed </h1>

@dump(Session::all())


@foreach ( $errors->all() as $ky => $error )
{{ $error }}
@endforeach


{{-- <form action="/ahmed" method="post">
    <form action="{{ url('ahmed') }}" method="post"> --}}
        <form action="{{ route('ahmed.store') }}" method="post">
            @csrf
            <input type="text" name="username" value="{{ old('username') }}">
            @error('username')
            {{ $message }}
            @enderror
            <input type="text" name="myemail" value="{{ old('myemail') }}">
            @error('myemail')
            {{ $message }}
            @enderror
            <input type="text" name="password" value="{{ old('password') }}">
            @error('password')
            {{ $message }}
            @enderror

            <button>add</button>
        </form>