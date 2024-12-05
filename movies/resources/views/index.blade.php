<x-layout>
    @auth
    <h1>Logged in</h1>
    @endauth

    @guest
       <h1> Gust<h1>
    @endguest
</x-layout>
