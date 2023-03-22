@include('layouts.include.header')

<body class="bg-white font-family-karla">

    <!-- Top Bar Nav -->
   @include('layouts.include.topbar')

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Mokammel Tanvir's Blog
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    @include('layouts.include.navmenu')
    


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        {{ $slot }}

<!-- Sidebar Section -->
@include('layouts.include.sidebar')


    </div>

@include('layouts.include.footer')