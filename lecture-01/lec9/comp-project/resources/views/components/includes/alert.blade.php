@if(session('success'))
<div class="alert alert-{{ $clr ?? 'info' }}">
    {{ session('success') }}
    @if($message)
        {{ $message }}
    @endif
</div>
@endif
