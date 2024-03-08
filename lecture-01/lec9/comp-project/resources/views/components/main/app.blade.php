<div>
    @include('layout.header')


        @section('sidebar')
        This is the master sidebar.
        @show

        {{ $slot }}



        @include('layout.footer')
</div>
