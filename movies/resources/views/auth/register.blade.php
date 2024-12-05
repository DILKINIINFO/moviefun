<x-layout>
  <h1 class="title">Register a new account</h1>
  <div class="mx-auto max-w-screen-sm card">
    <form action="{{route('register')}}" method="POST">
      @csrf
      {{--name--}}
      <div class="mb-4">
        <lable for="name">Name</lable>
        <input type="text" name="name" value ="{{ old('name')}}" class="input" >

      @error('name')
      <p class="error">{{$message}}</p>
          
      @enderror
      </div>

      {{--email--}}
      <div class="mb-4">
        <lable for="email">Email</lable>
        <input type="text" name="email" value ="{{ old('email')}}"class="input">

        @error('email')
      <p class="error">{{$message}}</p>
          
      @enderror
      </div>

      {{--Password--}}
      <div class="mb-4">
        <lable for="password">Password</lable>
        <input type="password" name="password" class="input">
        @error('password')
      <p class="error">{{$message}}</p>
          
      @enderror
      </div>
      {{--Confirm Password--}}
      <div class="mb-8">
        <lable for="password_confirmation">Confirm Password</lable>
        <input type="password" name="password_confirmation" class="input">
        @error('password')
      <p class="error">{{$message}}</p>
          
      @enderror
      </div>
      {{--Submit--}}
      <button class="btn" >Register</button>
    </form>
  </div>
</x-layout>