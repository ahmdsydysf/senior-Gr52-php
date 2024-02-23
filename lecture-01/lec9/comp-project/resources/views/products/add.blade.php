@extends('layout.app')

@section('page_content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('products.store') }}" method="post">
    @csrf
    name product
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    Price
    <input type="text" name="price" value="{{ old('price') }}">
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <select name="category_id" id="">
        @foreach ($categories as $cat )
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>

    <button> submit </button>
</form>
@endsection
