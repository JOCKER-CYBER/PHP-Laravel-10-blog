<x-app-layout meta-description="A journey into professional website development practices.">
@section('type', "article")
<!-- CHANGE THESE URLs INTO YOUR DOMAIN ADDRESS -->
              @section('url', "http://127.0.0.1:8000")
              @section('image', "http://127.0.0.1:8000/storage/post2-small.jpg")
              @section('width', "1200")
              @section('height', "630")
<div class="container max-w-7xl mx-auto py-6">

<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Latest Post -->
            <div class="col-span-2 sm:mx-0 mx-[5%]">
                <h2 class="text-lg sm:text-2xl font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                    Latest Post
                </h2>

                @if ($latestPost)
                    <x-post-item :post="$latestPost"/>
                @endif
            </div>

            <!-- Popular 3 post -->
            <div>
                <h2 class="text-lg sm:text-2xl sm:mx-0 mx-[5%] font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                    Popular Posts
                </h2>
                @foreach($popularPosts as $post)
                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <a href="{{route('view', $post)}}" class="pt-1 sm:ml-0 ml-[15px]">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"/>
                        </a>
                        <div class="col-span-3">
                            <a href="{{route('view', $post)}}">
                                <h3 class="text-sm uppercase whitespace-nowrap truncate">{{$post->title}}</h3>
                            </a>
                            <div class="flex gap-4 mb-2">
                            @foreach($post->categories as $category)
                                    <a href="#" class="bg-black text-white p-1 rounded text-xs font-bold uppercase">
                                        {{$category->title}}
                                    </a>
                                @endforeach
                            </div>
                            <div class="text-xs">
                                {{$post->shortBody(10)}}
                            </div>
                            <a href="{{route('view', $post)}}" class="text-xs uppercase text-gray-800 hover:text-black">Continue
                                Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Recommended posts -->
        <div class="mb-8">
            <h2 class="sm:mx-0 mx-[5%] text-lg sm:text-2xl font-bold text-[#a14831] uppercase pb-1 border-b-2 border-black mb-3">
                Recommended Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 mt-8 gap-3">
               @foreach($recommendedPosts as $post)
                    <x-post-item :post="$post" :show-author="false"/>
                @endforeach
            </div>
        </div>
</div>
</x-app-layout>
