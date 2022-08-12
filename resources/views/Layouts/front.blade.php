<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>IG BLOG</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="template/common-css/bootstrap.css" rel="stylesheet">

	<link href="template/common-css/ionicons.css" rel="stylesheet">

	<link href="template/common-css/layerslider.css" rel="stylesheet">


</head>
<body>
    <?php $param = App\Models\Param::find(1); $catxxs = App\Models\Categorie::all(); ?>
	<header>

		<div class="top-menu">

			<ul class="left-area welcome-area">
				<li class="hello-blog">Salut tout le monde et Bienvenu sur notre blog</li>
				<li><a href="mailto:contact@juliblog.com">{{ $param->email }}</a></li>
			</ul><!-- left-area -->


			<div class="right-area">

				<div class="src-area">
					<form action="post">
						<input class="src-input" type="text" placeholder="Rechercher ...">
						<button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
					</form>
				</div><!-- src-area -->

				<ul class="social-icons">
					<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
					<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
				</ul><!-- right-area -->

			</div><!-- right-area -->

		</div><!-- top-menu -->

		<div class="middle-menu center-text"><a href="#" class="logo"><img src="images/logo.png" alt="Logo Image"></a></div>

		<div class="bottom-area">

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/">ACCUEIL</a></li>
                <li><a href="/about">A PROPOS</a></li>
                <li class="drop-down"><a href="#!">CATEGORIES<i class="ion-ios-arrow-down"></i></a>

					<ul class="drop-down-menu">
						@foreach ($catxxs as $catxx)
                        <li><a href="/categorie/{{ $catxx->id }}">{{ $catxx->name }}</a></li>
                        @endforeach
					</ul>

				</li>

				<li><a href="03-About-me.html">ABOUT</a></li>
				<li><a href="/contact">CONTACT</a></li>
			</ul><!-- main-menu -->

		</div><!-- conatiner -->
	</header>

    @yield('slider')

	<section class="section blog-area">
		<div class="container">
			@yield('content')
		</div><!-- container -->
	</section><!-- section -->


	<section class="footer-instagram-area">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h5 class="title"><b class="light-color">Follow me &copy; instagram</b></h5>
				</div><!-- col-lg-4 -->
			</div><!-- row -->
		</div><!-- container -->

		<ul class="instagram">
			<li><a href="#"><img src="images/instragram-1-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-2-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-3-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-4-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-5-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-6-300x400.jpg" alt="Instagram Image"></a></li>
			<li><a href="#"><img src="images/instragram-7-300x400.jpg" alt="Instagram Image"></a></li>
		</ul>
	</section><!-- section -->


	<footer>
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<div class="footer-section">
						<p class="copyright">Juli &copy; 2018. All rights reserved | Made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> &amp; distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-sm-6">
					<div class="footer-section">
						<ul class="social-icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>

						</ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="template/common-js/jquery-3.1.1.min.js"></script>

	<script src="template/common-js/tether.min.js"></script>

	<script src="template/common-js/bootstrap.js"></script>

	<script src="template/common-js/layerslider.js"></script>

	<script src="template/common-js/scripts.js"></script>

</body>
</html>
