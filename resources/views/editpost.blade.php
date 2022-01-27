<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit a Post') }}
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
                    <form action="{{route('posts.update', $post)}}" method="POST" id="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <label for="title" style="font-weight:bold; color:#333">Post title</label>
                        <input style=" width: 100%; padding: 16px 20px;  border: none; border-radius: 4px; background-color: #f1f1f1;" type="text" name="title"  value="{{ $post->title }}" />
                        <label for="category_id" for="" style="font-weight:bold;  color:#333">Post category</label>
                        <select name="category_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" autofocus>
                            <option value='1'>Quote</option>
                            <option value='2'>Poetry</option>
                            <option value='3'>Short Story</option>
                            <option value='4'>Maxim</option>
                            <option value='5'>Book Review</option>
                            <option value='6'>Rhyme</option>
                            <option value='7'>Article</option>
                            <option value='8'>Essay</option>
                            <option value='9'>Verse</option>
                        </select>
                        <label for="desc" style="font-weight:bold; color:#333">Description</label>
                        <textarea style=" width: 100%; height: 100px; padding: 16px 20px; border: none; border-radius: 4px; background-color: #f1f1f1;" name="desc" type="text" >{{ $post->desciption }}</textarea>
                        <div>
                            <img src="/storage/{{ $post->img }}"/>
                        </div>

                        @if(session('success'))
                        <strong style="color:green;">{{session('success')}}</strong>
                        @endif
                        <button style=" background-color: #333;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  border-radius: 4px;
  margin: 4px 2px;
  cursor: pointer;" type="submit" >Update</button>

        

                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>