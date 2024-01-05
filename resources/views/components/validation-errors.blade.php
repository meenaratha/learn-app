@if ($errors->any())
    <div {{ $attributes }}>
        <div class="error-msg">{{ __('Whoops! Something went wrong.') }}</div>

        <ul class="error-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
