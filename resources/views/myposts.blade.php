<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($post as $post)
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="card">
                        <strong>{{ $post->title }}</strong>
                        <h5>{{ $post->user_id }} , {{ $post->created_at }}</h5>
                        <div>
                            <img src="/storage/{{ $post->img }}"/>
                        </div>
                        <p>{{ $post->desciption }}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>