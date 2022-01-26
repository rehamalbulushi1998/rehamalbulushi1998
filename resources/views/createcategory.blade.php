

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
                    <form action="{{route('category.store')}}" method="POST" id="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <label for="title" style="font-weight:bold; color:#333">Category title</label>
                        <input style=" width: 100%; padding: 16px 20px;  border: none; border-radius: 4px; background-color: #f1f1f1;" type="text" name="title"  placeholder="category title" /> 
                       
                        @if(session('success'))
                        <strong style="color:green;">{{session('success')}}</strong>
                        @endif

                        <x-form.type.crbutton type="submit" />

                    </form>
                    </div>
            </div>
        </div>
    </div>
