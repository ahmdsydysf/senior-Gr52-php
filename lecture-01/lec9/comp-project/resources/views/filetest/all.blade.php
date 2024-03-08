<x-main.app >


    <x-btns.formBTN to="{{ route('filemanager.create') }}" clr='info' word='add new' />

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">file name</th>
                <th scope="col">file image</th>
                <th scope="col">file description</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $data as $file )
            <tr>
                <th scope="row">{{ $file->id }}</th>
                <td>{{ $file->image_path }}</td>
                <td><img src="{{ asset('storage/' . $file->image_path) }}" alt=""></td>
                <td>{{ $file->image_description }}</td>
                <td>
                    <form action="{{ route('filemanager.destroy' ,$file->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button>delete</button>
                    </form>
                    <a href="{{ route('filemanager.edit' , ['filemanager' => $file->id]) }}">edit</a>
                    {{-- <a href="{{ route('filemanager.edit' ,  $file->id) }}">edit</a> --}}
                </td>
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
    {{ $data->links() }}
</x-main.app>
