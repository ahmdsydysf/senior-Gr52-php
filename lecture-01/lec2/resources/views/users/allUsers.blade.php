@extends('layout.app')

@section('page_content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>@mdo</td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection