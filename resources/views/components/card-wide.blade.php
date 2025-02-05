@props(['job'])
<div class="flex bg-white/10 rounded-xl p-3 gap-3 border-2 border-transparent hover:border-blue-700 transition-colors duration-300 group">
    <img src="{{asset($job->employer->logo)}}" class="rounded-xl my-auto w-[90px]">
    <div class=" flex-1 flex flex-col ">
        <div class="text-xs text-gray-300 font-bold">
            {{$job->employer->name}}
        </div>
        <h1 class="font-bold text-xl mt-2  group-hover:text-blue-700 transition-colors duration-300">{{$job->title}}</h1>
        <p class="text-xs text-gray-300 font-bold mt-auto">{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class=" self-end">
        @foreach ($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach
    </div>
</div>