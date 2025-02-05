@props(["tag",'type' => "base"])
@php
    $class = '';
    if($type === "base") {
        $class = 'bg-white/25 text-xs rounded-xl px-2 py-1 hover:bg-white/10 transition-colors duration-300';
    } else if ($type === 'large') {
        $class = 'bg-white/25 text-xm rounded-xl px-2 py-1 hover:bg-white/10 transition-colors duration-300';
    }
@endphp
<a href="/tags/{{$tag->name}}" class="{{$class}}"> {{$tag->name}}</a>
