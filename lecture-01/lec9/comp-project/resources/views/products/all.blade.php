<x-main.app >


<x-btns.formBTN to="{{ route('products.create') }}" clr='info' word='add new' />

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

<x-alert-me clr='danger' message="new msg from x-compo Class"  />
<x-alert-me  />



{{-- <x-includes.alert clr='success' message="new msg from x-compo2"  />




<x-includes.alert clr='info' message="new msg from x-compo open close" >

    <p>slot Lorem, ipsum dolor.</p>
</x-includes.alert> --}}

</x-main.app>
