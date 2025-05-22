@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-[10px] text-rose-500 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
