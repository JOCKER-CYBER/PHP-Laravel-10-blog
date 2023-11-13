<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $metaTitle ?: 'The Wabnev Blog' }}</title>
        <meta name="author" content="Wabnev">
        <meta name="description" content="{{ $metaDescription }}">
        <meta property="og:description" content="{{ $metaDescription }}" />
        <meta property="og:url" content="@yield('url')" />
        <meta property="og:title" content="{{ $metaTitle ?: 'The Wabnev Blog' }}" />
        <meta property="og:type" content="@yield('type')" />
        <meta property="og:image" content="@yield('image')" />
        <meta property="og:image:width" content="@yield('width')">
        <meta property="og:image:height" content="@yield('height')">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $metaTitle ?: 'The Wabnev Blog' }}">
        <meta name="twitter:description" content="{{ $metaDescription }}">
        <meta name="twitter:site" content="@yield('url')">
        <meta name="twitter:image" content="@yield('image')">

        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">

        <!-- Fonts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @livewireStyles
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased overflow-x-hidden" x-data="{ openMenu : true }">

    <style>
    [x-cloak] {
      display: none !important;
    }
  </style>

    <header class="bg-white">
        <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10" :class="openMenu ? 'invisible' : 'overflow-visible' ">
      <div class="flex items-center justify-between">
        <a href="https://www.wabnev.co.za" class="-m-1.5 p-1.5">
          <span class="sr-only">Wabnev</span>
          <img class="h-8 w-auto" src="/img/logo.png" alt="logo">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="openMenu = !openMenu">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <a href="https://www.wabnev.co.za" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
            <a href="https://www.wabnev.co.za/#about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About</a>
            <a href="https://www.wabnev.co.za/#contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--computer screens-->
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global" :class="openMenu ? 'visible' : 'invisible' " x-cloak>
    <div class="flex lg:flex-1">
    <a href="https://www.wabnev.co.za" class="-m-1.5 p-1.5">
        <img src="/img/logo.png" class="h-11" alt="logo">
    </a>
    </div>
    <div class="flex lg:hidden">
      <button @click="openMenu = !openMenu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="open = open">
        <span class="sr-only">Open main menu></span>
        <svg class="h-6 w" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="{{URL('/')}}" class="text-lg font-semibold leading-6 text-gray-900">Home</a>
      <a href="https://www.wabnev.co.za/#about" class="text-lg font-semibold leading-6 text-gray-900">About</a>
      <a href="https://www.wabnev.co.za/#contact" class="text-lg font-semibold leading-6 text-gray-900">Contact</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    @auth
                    <div class="flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="hover:bg-amber-400 hover:text-white text-lg flex items-center rounded py-2 px-4 mx-2">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <a href="{{route('login')}}"
                       class="hover:bg-amber-400 text-lg hover:text-white rounded py-2 px-4 mx-2">Login</a>
                    <a href="{{route('register')}}" class="bg-amber-400 text-lg text-white rounded py-2 px-4 mx-2">Register</a>
                @endauth
    </div>
  </nav>
</header>

    <!-- Text Header -->
<div class="w-full container bg-amber-400 mx-auto">
        <div class="flex flex-col items-center py-12 justify-center content-center">
            <a class="font-bold text-white uppercase hover:text-gray-700 text-3xl sm:text-5xl" href="{{ route('welcome') }}">
                Wabnev Blog
            </a>
        </div>
</div>


    <!-- Topic Nav -->
    <nav class="w-full sm:bg-white py-4 border-b">
        <div class="w-full flex-grow sm:block sm:items-center sm:w-auto">
            <div class="w-full container mx-auto sm:flex sm:flex-row items-center justify-center sm:text-sm text-[11px] font-bold uppercase mt-0 px-1 py-2">
            <div class="flex pb-4 sm:hidden">
    @auth
                    <div class="flex flex-auto !justify-end">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="bg-amber-400 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                <div class="flex flex-auto !justify-end">
                <a href="{{route('login')}}"
                       class="hover:bg-amber-400 hover:text-white rounded p-2">Login</a>
                    <a href="{{route('register')}}" class="bg-amber-400 text-white rounded py-2 px-4 mx-2">Register</a>
                </div>
                @endauth
            </div>
            <a href="{{route('welcome')}}" class="hover:bg-gray-800 hover:text-white rounded py-2 px-2 mx-2">Blog</a>
                @foreach($categories as $category)
                    <a href="{{route('by-category', $category)}}"
                       class="hover:bg-gray-800 hover:text-white rounded font-bold px-2 py-2 sm:px-2">{{$category->title}}</a>
                @endforeach

                    <form class="sm:flex-row sm:flex" method="get" action="{{route('search')}}">
                    <input name="q" value="{{request()->get('q')}}"
                           class="block w-full rounded-md border-0 px-3.5 py-2 sm:mt-0 mt-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 font-medium"
                           placeholder="Search our blog"/>
                </form>
            </div>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        {{$slot}}

    </div>

    <footer class="w-full border-t bg-white pb-1">
        <div class="w-full container mx-auto block">
            <div class="pt-6 flex justify-center text-center">
            <a href="{{URL('/')}}" class="text-sm font-semibold leading-6 text-gray-600">Home</a>
      <a href="https://www.wabnev.co.za/#about" id="click3" class="text-sm mx-6 font-semibold leading-6 text-gray-600">About</a>
      <a href="https://www.wabnev.co.za/#price" id="click1" class="text-sm font-semibold leading-6 text-gray-600">Pricing</a>
      <a href="{{route('welcome')}}" id="click2" class="text-sm mx-6 font-semibold leading-6 text-gray-600">Blog</a>
            </div>
            <div class="flex justify-center text-center py-2 content-center items-center">
            <a href="https://www.facebook.com/profile.php?id=100083157105425">
                              <i class="fab fa-facebook text-2xl"></i>
                              </a>
                              <a href="https://wa.me/27739347454" class="-m-1.5 p-1.5">
                              <i class="fab fa-whatsapp text-2xl ml-2"></i>
                              </a>
                              <a href="https://www.linkedin.com/company/86314156/" class="-m-1.5 p-1.5">
                                <i class="fab fa-linkedin text-2xl ml-2"></i>
                                </a>
            </div>
            <div class="flex justify-center text-center content-center items-center">
            <p class="sm:text-[12px] text-[10px]">&copy; Copyright 2023 Wabnev. All Rights Reserved.</a></p>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
