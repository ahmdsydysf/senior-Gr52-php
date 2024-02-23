@extends('layout.app')

@section('page_content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">first name</th>
            <th scope="col">email</th>
            <th scope="col">gender</th>
            <th scope="col">address</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data as $profile )
        <tr>
            <th scope="row">{{ $profile->user->id }}</th>
            <td>{{ $profile->first_name }}</td>
            <td>{{ $profile->user->email }}</td>
            <td>{{ $profile->gender }}</td>
            <td>{{ $profile->address }}</td>
            <td>@mdo</td>
        </tr>
        @endforeach
        {{-- @foreach ( $data as $user )
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->profile->first_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->profile->gender }}</td>
            <td>{{ $user->profile->address }}</td>
            <td>@mdo</td>
        </tr>
        @endforeach --}}


    </tbody>
</table>
@endsection
