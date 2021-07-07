@props(['href', 'active'])


@if($active)
    <li class="text-lg bg-white text-gray-600  rounded-l-full">
        <a href="{{$href}}" class="px-4 py-2 w-full inline-block">
            {{$slot}}
        </a>
    </li>
@else
    <li class="text-gray-100 text-lg hover:bg-white hover:text-gray-600 transition-all delay-100 duration-500 rounded-l-full">
        <a href="{{$href}}" class="px-4 py-2 w-full inline-block">
            {{$slot}}
        </a>
    </li>
@endif
