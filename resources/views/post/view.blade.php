<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">
<!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
        
          <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="{{ route('view', $post) }}" class="hover:opacity-75">
              <img src="{{$post->getThumbnail()}}">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
              <div class="flex gap-4">
              @foreach ($post->categories as $category)
              <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
              @endforeach
              </div>
              <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                {{ $post->title }}</h1>
              <p href="#" class="text-sm pb-8">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>, Published on {{$post->created_at->format('M d, Y') }}
              </p>
              <div>
                {!! $post->body !!}
              </div>
            </div>
          </article>
        
          <div class="w-full flex pt-6">
            @if ($previous)
              
            <a href="{{ route('view', $previous) }}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
              <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
              <p class="pt-2">{{ $previous->title }}</p>
            </a>
            @endif
            @if ($next)
            <a href="{{ route('view', $next) }}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
              <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i
                  class="fas fa-arrow-right pl-1"></i></p>
              <p class="pt-2">{{ $next->title }}</p>
            </a>
            @endif
          </div>
        
          <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
              <img src="https://avatars.githubusercontent.com/u/69724418?v=4" class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
              <p class="font-semibold text-2xl">Mokammel Tanvir</p>
              <p class="pt-2">Full-Stack Web Developer with over 5 years of experience in the industry.</p>
              <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                <a class="" target="_blank" href="https://facebook.com/mokammeltanvir.me">
                  <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-4" target="_blank" href="https://instagram.com/mokammeltanvir.me">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-4" target="_blank" href="https://twitter.com/mokammeltanvir">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-4" target="_blank" href="https://www.linkedin.com/in/mokammeltanvir/">
                  <i class="fab fa-linkedin"></i>
                </a>
              </div>
            </div>
          </div>
        
        </section>
<x-sidebar/>

</x-app-layout>