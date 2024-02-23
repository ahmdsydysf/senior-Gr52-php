<h1> edit new ahmed </h1>

{{-- <form action="/ahmed" method="post">
    <form action="{{ url('ahmed') }}" method="post"> --}}
        <form action="" method="post">
            @csrf
            <input type="text" value="{{ $id }}" name="username">

            <button>add</button>
        </form>