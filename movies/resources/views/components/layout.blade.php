
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_Name')}}</title>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-purple-300 text-slate-900">
  <header>
    <nav>
  <a href="{{route('home')}}" class="nav-link">Home</a>
  @auth
      <div class="relative grid place-items-center" x-data="{open:false}">
    {{--Dropdown menu button--}}
    <button @click="open = !open" type="button" class="profile-btn">
      <img src="https://picsum.photos/200" alt="">
    </button>
    {{--Drop down menu--}}
    <div  x-show ="open" @click.outside="open=false" class=" bg-white shadow-lg absolute
    top-10 right-0 rounded-lg overflow-hidden
    font-light">
    <p class="name">{{auth()->user()->name}}</p>
    <a href="{{route('dashboard')}}" class="block hover:big-slate-100 pl-4 pr-8 py-2 mb-1">Dashboard</a>


    <form action="{{route ('logout')}}" method="POST">
      @csrf
      <button class="block w-full text-left hover:big-slate-100 pl-4 pr-8 py-2">Logout</button>



      </div>

      </div>
        @endauth
  @guest
 
  <div class="flex items-center gap-4">
    <a href="{{route('login')}}" class="nav-link">Login</a>
    <a href="{{route('register')}}" class="nav-link">Register</a>
  </div>
  @endguest
    </nav>
  </header>

  <main class="py-8 px-4 mx-auto max-w-screen-lg">
    {{$slot}}
  </main>
</body>
</html>