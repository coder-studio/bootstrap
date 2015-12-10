<div class="checkbox {{ $class }} @if($state)has-{{ $state }}@endif">
    <label>
        <input
            type="checkbox"
            name="{{ $name }}{{ $name_a }}"
            id="{{ $id }}"
            value="{{ $value }}"
            {!! $params !!}
            @if($checked) checked @endif
        >
        {!! $label !!}
    </label>
    @if($help)
        @include('bootstrap::help')
    @endif
</div>