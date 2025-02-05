@props(['job'])
<div class="flex flex-col bg-white/10 rounded-xl p-3 text-center space-y-6 border-2 border-transparent hover:border-blue-700 transition-colors duration-300 group">
    <div class=" self-start text-xs text-gray-300 font-bold">
        {{$job->employer->name}}
    </div>
    <div>
        <h1 class="font-bold text-xl group-hover:text-blue-700 transition-colors duration-300">{{$job->title}}</h1>
        <p>{{$job->schedule}} - From {{$job->salary}}</p>
    </div>
    <div class="flex justify-between my-auto items-center">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :$tag/>
            @endforeach
        </div>
        <img src="{{asset($job->employer->logo)}}" class="rounded-xl w-[40px]"/>
    </div>
</div>