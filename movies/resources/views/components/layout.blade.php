
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_Name')}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="bg-purple-300 text-slate-900">
  <header>
    <nav>
  <a href="{{route('home')}}" class="nav-link">Home</a>
  <div class="flex items-center gap-4">
    <a href="{{route('login')}}" class="nav-link">Login</a>
    <a href="{{route('register')}}" class="nav-link">Register</a>
  </div>
    </nav>
  </header>

  <main class="py-8 px-4 mx-auto max-w-screen-lg">
    {{$slot}}
  </main>
</body>
</html>