@extends('layout.app')

@section('page_content')
<div class="container">
    <div class="row">
        <div class="m-5">
            <h1> this is all Profiles Data
                @if (session()->has('status'))
                {{ session()->get('status') }}
                {{-- {{ Session::get('sataus') }} --}}
                @endif

            </h1>
            <a class="btn btn-success" href="{{ route('profile.create') }}">add new</a>
            <form action="{{ route('profile.index') }}" method="get">
                <select name="col_select" id="">
                    <option selected value="*">All</option>
                    <option value="first_name">First Name</option>
                    <option value="age">Age</option>
                </select>
                <input type="text" name="search">
                <button class="btn btn-success">search</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First NAme</th>
                        <th scope="col">Last NAme</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $data as $profile )
                    <tr>
                        <th scope="row">{{ $profile->profile_id }}</th>
                        <td>{{ $profile->first_name }}</td>
                        <td>{{ $profile->last_name }}</td>
                        <td>{{ $profile->mobile }}</td>
                        <td>{{ $profile->age }}</td>
                        <td>{{ $profile->address }}</td>
                        <td>
                            <a href="{{ route('profile.edit' ,$profile->profile_id  ) }}" class="btn btn-info">edit</a>
                            <form action="{{ route('profile.destroy' , $profile->profile_id) }}" method="post">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger">delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection