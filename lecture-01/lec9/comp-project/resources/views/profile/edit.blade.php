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
<form action="{{ route('profile.update' , $profile->profile_id) }}" method="post">
    @csrf
    @method('PUT')
    first
    <input type="text" name="first_name" value="{{ $profile->first_name }}">
    @error('first_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    last
    <input type="text" name="last_name" value="{{ $profile->last_name }}">
    @error('last_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    mobile
    <input type="text" name="mobile" value="{{ $profile->mobile }}">
    @error('mobile')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    age
    <input type="text" name="age" value="{{ $profile->age }}">
    @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    add
    <input type="text" name="address" value="{{ $profile->address }}">
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="radio" name="gender" @checked($profile->gender == 'male') value="male" id="">male
    <input type="radio" name="gender" @checked($profile->gender == 'female') value="female" id="">female

    @error('gender')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button> submit </button>
</form>
@endsection