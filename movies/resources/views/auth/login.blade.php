<x-layout>
  <h1 class="title">Welcome Back</h1>
  <div class="mx-auto max-w-screen-sm card">
    <form action="{{route('login')}}" method="POST">
      @csrf
     

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
      <div class="mb-4">
        <input type="checkbox" name="remember" id="remember"><label for="remember">Remember me</label>
      </div>
      @error('failed')
      <p class="error">{{$message}}</p>
          
      @enderror
      
      {{--Submit--}}
      <button class="btn" >Login</button>
    </form>
  </div>
</x-layout>