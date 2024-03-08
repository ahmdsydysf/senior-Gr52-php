
        @foreach ( $users as $user )
        <tr>
            <th scope="row">{{ $user->id }}</th>

            <td>{{ $limitition($user->name , 6) }}</td>

            <td>{{ $limitition($user->email , 9) }}</td>
            <td>{{ $user->password }}</td>
            <td>@mdo</td>
        </tr>
        @endforeach
