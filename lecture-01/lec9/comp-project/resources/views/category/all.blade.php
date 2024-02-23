@extends('layout.app')

@section('page_content')

<a href="{{ route('categories.create') }}">add new</a>
@if(session('success'))

<div class="alert alert-info">{{ session('success') }}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">category name</th>
            <th scope="col">category parent</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data as $category )
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ $category->parent->name  }}</td>

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
