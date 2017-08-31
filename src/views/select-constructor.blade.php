<div class="form-group">
    @if($label)
        @include('bootstrap::label')
    @endif

    <select name="{{ $name }}{{ $name_a }}" class="form-control {{ $class }} @if($size)form-control-{{ $size }}@endif {{ $state or '' }}" id="{{ $id }}" {!! $params !!}>
        @foreach($options as $k => $v)
            @if(is_array($value))
                <option value="{{ $k }}" @foreach($value as $s) @if($s == $k) selected @endif @endforeach >{{ $v }}</option>
            @else
                <option value="{{ $k }}" @if($value == $k) selected @endif >{{ $v }}</option>
            @endif
        @endforeach
    </select>

    @if($help)
        @include('bootstrap::help')
    @endif
</div>