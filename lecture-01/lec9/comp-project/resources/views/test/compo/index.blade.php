<x-main.app >


<x-btn name='add new user' sdsds="btn btn-info" id='ahmed' />

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">user name</th>
                <th scope="col">user email</th>
                <th scope="col">password</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

    <x-user-data :users="$users" />

        </tbody>
    </table>
</x-main.app >

