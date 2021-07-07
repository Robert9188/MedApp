<a href="{{$link}}"
    {{ $attributes->merge(['class' => $classes . " py-1 px-4 rounded-lg transform hover:scale-95 duration-300"]) }}>
    {{$slot}}
</a>
