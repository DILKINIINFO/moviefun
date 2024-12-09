
<x-layout>
   
    <h1 class="font-bold text-2xl-mb4" >Latest Posts</h1>
    <div class="grid grid-cols-2 gap-6">
    
@foreach ($posts as $posts)
<div class="card">
    
    <div class="bg-gray-200 p-4 rounded shadow-md">
    
    {{--title--}}
    <h2 style="font-weight: bold; font-size: 1.25rem; <br><br>">{{$posts->title}}</h2>


    {{--Author and Date--}}
    <div class="text-xs-font-light mb-4">
        <span>Posted {{$posts->created_at->diffForHumans()}} by</span>
        <a href="" class="text-blue-500 font-medium">USERNAME</a>
    </div>
    
    

{{--Body--}}
<div class="text-sm">
    <p>{{Str::words($posts->body, 15)}}</p>
 
</div>
    </div>
</div>
@endforeach
</div>
    
</x-layout>
