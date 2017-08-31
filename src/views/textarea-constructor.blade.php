<div class="form-group">
    @if($label)
        @include('bootstrap::label')
    @endif

    @if($addon_left or $addon_right)
        <div class="input-group">
            @if($addon_left)
                <div class="input-group-addon">{!! $addon_left !!}</div>
            @endif

            @include('bootstrap::textarea')

            @if($addon_right)
                <div class="input-group-addon">{!! $addon_right !!}</div>
            @endif
        </div>
    @else
        @include('bootstrap::textarea')
    @endif

    @if($help)
        @include('bootstrap::help')
    @endif
</div>