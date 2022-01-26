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
            body {
                font-family: 'Nunito', sans-serif;
         
            }
			@media (max-width: 730px) {

#visible {

  display: none;

}



}

        </style>
</head>
<body>

	<!-- Navigation -->
	<nav>@include('layouts.navbar')</nav>
	
	<!-- Navigation end -->

	<!-- Top banner -->
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
	
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span id="visible" class="brand-span">Welcom</span>
					<span id="visible" class="brand-span2">To...</span>
					<h2 id="visible" style="margin-left:170%;" class="top-banner__h2">E-INK</h2>
				</div>
			
				<a href="/register" id="visible" class="brand-button">Get Started</a>
			</div>
		</div>
	</section>
	<!-- Top banner end -->


	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">Blogs</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog1.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="./images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  Blog end -->

	<!-- Social -->
@include('layouts.socialmediabanner')
	<!-- Social -->

	<!-- Footer -->
@include('layouts.footer')
	<!-- Footer end -->

	<!-- Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>