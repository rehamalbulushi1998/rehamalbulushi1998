<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
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
                    <form action="{{route('users.update', $user)}}" method="POST" id="form" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <label for="name" style="font-weight:bold; color:#333">Name</label>
                        <input name="name" type="text" value="{{$user->name}}" placeholder="Your name" style=" width: 100%; padding: 16px 20px; border: none;border-radius: 4px;background-color: #f1f1f1;" />
                        <label for="user_name" style="font-weight:bold; color:#333">User Name</label>
                        <input name="user_name" value="{{$user->user_name}}" type="text" placeholder="Your user name" style=" width: 100%; padding: 16px 20px; border: none;border-radius: 4px;background-color: #f1f1f1;" />
                        <label for="email" for="email" style="font-weight:bold;  color:#333">Email</label>
                        <input name="email" type="text" value="{{$user->email}}" placeholder="your email" style=" width: 100%; padding: 16px 20px;border: none;border-radius: 4px; background-color: #f1f1f1;" />
                        <label for="user_type" style="font-weight:bold; color:#333">Registered As</label>
                        <input name="user_type" value="{{$user->user_type}}" placeholder="author or reader" style=" width: 100%; padding: 16px 20px;border: none;border-radius: 4px; background-color: #f1f1f1;" />
                       
                        @if(session('success'))
                        <strong style="color:green;">{{session('success')}}</strong>
                        @endif
                        <x-form.type.button type="submit" />


                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>