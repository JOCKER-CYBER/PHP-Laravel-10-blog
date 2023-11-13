<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">
@section('type', "article")
              @section('meta_description', $post->meta_description)
              <!-- CHANGE THESE URLs INTO YOUR DOMAIN ADDRESS -->
              @section('url', "http://127.0.0.1/$post->slug")
              @section('image', "http://127.0.0.1/storage/$post->thumbnail")
              @section('width', "1200")
              @section('height', "630")
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">

            <article class="flex flex-col shadow my-4">
                <h1 class="text-4xl font-bold self-center text-center hover:text-gray-700 pb-4">
                        {{$post->title}}
                </h1>
                <!-- Article Image -->
                    <img src="{{$post->getThumbnail()}}">
                <div class="bg-white flex flex-col justify-start p-6">
                    <div class="flex gap-4">
                        @foreach($post->categories as $category)
                            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                                {{$category->title}}
                            </a>
                        @endforeach
                    </div>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
                        {{$post->getFormattedDate()}} | {{ $post->human_read_time }}
                    </p>
                    <div>
                        {!! $post->body !!}
                    </div>

                    <livewire:upvote-downvote :post="$post"/>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <div class="w-1/2">
                    @if($prev)
                        <a href="{{route('view', $prev)}}"
                           class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center">
                                <i class="fas fa-arrow-left pr-1"></i>
                                Previous
                            </p>
                            <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                        </a>
                    @endif
                </div>
                <div class="w-1/2">
                    @if($next)
                        <a href="{{route('view', $next)}}"
                           class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next
                                <i
                                    class="fas fa-arrow-right pl-1"></i></p>
                            <p class="pt-2">
                                {{\Illuminate\Support\Str::words($next->title, 5)}}
                            </p>
                        </a>
                    @endif
                </div>
            </div>

        </section>

        <x-sidebar/>
</x-app-layout>
