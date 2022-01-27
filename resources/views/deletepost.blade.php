<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete a Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong style="color:red">Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('posts.destroy', $post)}}" method="POST" id="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="row">
                            <p> are you 100% sure about deleting this data ?</p>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button style=" background-color: #333;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  border-radius: 4px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" >Delete</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>