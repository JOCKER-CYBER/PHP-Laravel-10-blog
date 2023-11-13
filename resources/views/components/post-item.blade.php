<article class="flex max-w-xl flex-col items-start justify-between">
        <div class="pb-2"><img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" class="object-contain"></div>
        <div class="flex items-center mx-[5%] sm:mx-0 gap-x-4 text-xs">
            <p class="font-semibold text-gray-900">
                {{$post->user->name}},
            </p>
          <time class="text-gray-500">{{$post->getFormattedDate()}} | {{ $post->human_read_time }}</time>
          @foreach($post->categories as $category)
          <a href="{{route('by-category', $category)}}" class="relative z-10 rounded-lg bg-black px-3 py-1.5 font-medium text-white hover:bg-stone-700">{{$category->title}}</a>
         @endforeach
        </div>
        <div class="group relative mx-[5%] sm:mx-0">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="{{route('view', $post)}}">
              <span class="absolute"></span>
              {{$post->title}}
            </a>
          </h3>
          <a href="{{route('view', $post)}}" class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{$post->shortBody()}}</a>
        </div>
        <div class="relative mt-8 flex items-center gap-x-6 sm:gap-x-4">
          <div class="text-sm leading-6">
          </div>
          <a href="{{route('view', $post)}}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
        </div>
</article>
