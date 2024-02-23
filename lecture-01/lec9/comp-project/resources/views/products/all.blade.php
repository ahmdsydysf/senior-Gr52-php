@extends('layout.app')

@section('page_content')

<a href="{{ route('products.create') }}">add new</a>


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">product name</th>
            <th scope="col">product Price</th>
            <th scope="col">Category</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $data as $product )
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
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

<x-includes.alert clr='danger' message="new msg from x-compo"  />
<x-includes.alert clr='success' message="new msg from x-compo2"  />

{{-- <x-includes.alert> </x-includes.alert> --}}

@endsection
