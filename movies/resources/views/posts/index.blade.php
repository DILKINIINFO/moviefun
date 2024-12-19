<x-layout>
    <h1 class="title" >Welcome to the MovieZone</h1>
    <h3 class="subtitle">The place for Movie Bloggers</h3>
    <br><br>
  <h2 class="sub">Latest Posts</h2>

  {{-- List of posts --}}
  <div class="grid grid-cols-2 gap-6">
      @foreach ($posts as $post)
          <x-postCard :post="$post" />
      @endforeach
  </div>

  {{-- Pagination links --}}
  <div>
      {{ $posts->links() }}
  </div>
</x-layout>