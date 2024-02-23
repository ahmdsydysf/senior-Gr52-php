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
<form action="{{ route('profile.store') }}" method="post">
    @csrf
    first
    <input type="text" name="first_name" value="{{ old('first_name') }}">
    @error('first_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    last
    <input type="text" name="last_name" value="{{ old('last_name') }}">
    @error('last_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    mobile
    <input type="text" name="mobile" value="{{ old('mobile') }}">
    @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    age
    <input type="text" name="age" value="{{ old('age') }}">
    @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    add
    <input type="text" name="address" value="{{ old('address') }}">
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="radio" name="gender" value="male" id="">male
    <input type="radio" name="gender" value="female" id="">female
    @error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button> submit </button>
</form>
@endsection