
    <!-- Navigation -->
	<nav>@include('layouts.navbar')</nav>
	
	<!-- Navigation end -->

	<!-- Blog -->
	
			<h2 class="universal-h2 universal-h2-bckg">Blogs</h2>
			@foreach ($post as $post )
			
						<img src="/storage/{{ $post->img }}">
					
					<div class="single-blog__text">
						<span>{{ $post->user->user_name }}, {{ $post->category->title }}, {{ $post->created_at }}</span>
						<p>{{ $post->desciption }}</p>
					</div>
			
			@endforeach
	
	<!--  Blog end -->
