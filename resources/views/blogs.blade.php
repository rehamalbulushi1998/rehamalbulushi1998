<!doctype html>
<!--
	Author by FreeHTML5.co
	Twitter: https://twitter.com/fh5co
	Facebook: https://fb.com/fh5co
	URL: https://freehtml5.co
-->
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="tempcss/style.css">
	<link rel="stylesheet" href="tempcss/slick.css">
	<title>E-INK</title>

<style>
	 .frame {
        width: 390px;
        height: 340px;
        border: 3px solid black;
        background: #333;
        margin: auto;
        padding: 15px 10px;
      }
      img {
        width: 100%;
        height: 100%;
      }
	</style>
</head>
<body>
    <!-- Navigation -->
	<nav>@include('layouts.navbar')</nav>
	
	<!-- Navigation end -->

	<!-- Blog -->
	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">Blogs</h2>
		
				
				@foreach ($post as $post )
				<div class="single-blog">
					<div class="single-blog__img">
					<div class="frame">
                            <img src="/storage/{{ $post->img }}" />
                        </div>
					</div>
					<div class="single-blog__text">
						<h4>{{ $post->title }}</h4>
						<span>{{ $post->user->user_name }}, {{ $post->category->title }}, {{ $post->created_at }}</span>
						<p>{{ $post->desciption }}</p>
					</div>
				</div>
				
				@endforeach
		
		</div>
	</section>

	<!--  Blog end -->

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
