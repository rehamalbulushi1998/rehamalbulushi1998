<html>
  <head>
  <style>
      .frame {
        width: 300px;
        height: 250px;
        border: 3px solid #ccc;
        background: #eee;
        margin: auto;
        padding: 15px 10px;
      }
      img {
        width: 100%;
        height: 100%;
      }
    </style>
  </head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @if(session('success'))
                        <strong style="color:green;">{{session('success')}}</strong>
                        @endif
                @foreach ($post as $post)
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                        <strong>{{ $post->title }}</strong>
                        <h5> {{ $post->created_at }}</h5>
                        <div class="frame">
                            <img src="/storage/{{ $post->img }}" />
                        </div>
                        <p>{{ $post->desciption }}</p>
                        <br/>
                        <a style=" background-color: #333; border: none;color: white;border-radius: 4px;" href="/{{ $post->id }}/editpost">Edit</a>
                        <a style=" background-color: #333; border: none;color: white;border-radius: 4px;" href="/{{ $post->id }}/deletepost">Delete</a>
                    </div>


                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
</html>