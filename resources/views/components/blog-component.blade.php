@props(['title', 'user_name', 'time', 'blog'])
<div class="review-card p-8">
    <div class="flex items-center justify-between">
        <h3 class="text-xl text-gray-600 font-semibold antialiased">{{$title}}</h3>
        <img class="size-8" src="{{ asset('assets/icons/double.svg') }}" alt="Icon">
    </div>
    <a href="{{route('blogs.show', $blog)}}" class="py-8 text-base font-mono text-justify break-words whitespace-pre-line line-clamp-3">“{{$slot}}”</a>
    <div class="flex items-center gap-2">
        <span class="flex items-center justify-center h-12 w-12 bg-gray-600 rounded-full text-white"><i class="fa-solid fa-user"></i></span>
        <div>
            <h3 class="font-semibold text-base antialiased">{{$user_name}}</h3>
            <span class="text-sm font-normal">{{$time}}</span>
        </div>
    </div>
</div>