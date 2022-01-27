<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Post') }}
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
                    <form action="{{route('posts.store')}}" method="POST" id="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <label for="title" style="font-weight:bold; color:#333">Post title</label>
                        <input style=" width: 100%; padding: 16px 20px;  border: none; border-radius: 4px; background-color: #f1f1f1;" type="text" name="title" required placeholder="post title" />
                        <label for="category_id"  style="font-weight:bold;  color:#333">Post category</label>
                        <select name="category_id" required class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" autofocus>
                        @foreach ($category as $category)
                        <option value='{{$category->id}}'>{{$category->title}}</option>
                        @endforeach
                    </select>
                        
                        <label for="desc" style="font-weight:bold; color:#333">Description</label>
                        <textarea required style="width: 100%; height: 100px; padding: 16px 20px; border: none; border-radius: 4px; background-color: #f1f1f1;" name="desc" type="text" placeholder="Your user name"></textarea>
                        <label for="file" style="font-weight:bold; color:#333">Add an image</label>
                        <input type="file" required name="file" />

                        @if(session('success'))
                        <strong style="color:green;">{{session('success')}}</strong>
                        @endif

                        <x-form.type.crbutton type="submit" />

                    </form>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>