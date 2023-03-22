@include('layouts.include.header')

<body class="bg-gray-50 font-family-karla">

    <!-- Top Bar Nav -->
   @include('layouts.include.topbar')

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="{{ route('home') }}">
                Mokammel Tanvir's Blog
            </a>
            <p class="text-lg text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header-subtitle') }}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    @include('layouts.include.navmenu')
    


    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        {{ $slot }} 
    </div>

@include('layouts.include.footer')