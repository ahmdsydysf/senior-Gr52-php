<div>
    @if(session('success'))
    <div class="alert alert-{{ $clr }}">
        {{ session('success') }} --
        {{ $message }}
    </div>
    @endif
</div>
