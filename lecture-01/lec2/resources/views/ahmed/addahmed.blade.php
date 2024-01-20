<h1> add new ahmed </h1>

{{-- <form action="/ahmed" method="post">
    <form action="{{ url('ahmed') }}" method="post"> --}}
        <form action="{{ route('ahmed.store') }}" method="post">
            @csrf
            <input type="text" name="username">

            <button>add</button>
        </form>