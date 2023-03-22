<x-app-layout :meta-title="'Mokammel Tanvir Blog - Post by Category '. $category->title" meta-description="MokammelTanvir's personal blog about Programming and Technology">
<!-- Posts Section -->
<section class="w-full md:w-2/3 flex flex-col items-center px-3">

  @foreach ($posts as $post)
      <x-post-item :post="$post" >
        </x-post-item>

  @endforeach
 
  <!-- Pagination -->
  {{ $posts->links() }}

</section>

<!-- Sidebar Section -->
<x-sidebar></x-sidebar>

</x-app-layout>
