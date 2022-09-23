@if($label)
    <label>{{$label}}</label>
@endif
<button class="btn btn-{{ $type }} {{ $btnClass }}">
    {{ $slot }}
</button>