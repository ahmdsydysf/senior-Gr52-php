@dump($request->session()->all())

@if ($request->session()->exists('users'))
<h1> {{ session('users') }} exists </h1>
@else
no data found
@endif