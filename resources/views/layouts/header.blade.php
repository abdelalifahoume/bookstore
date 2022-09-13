<header class="site-header">
	<div class="container">
		<a href="{{ URL::current()}}" id="branding">
			<img src="{{ url('assets/images/logo.png') }}" alt="" class="logo">
			<div class="logo-copy">
				<h1 class="site-title">{{ config('app.name', 'Laravel') }}</h1>
				<small class="site-description">Ouvres des écrivans les plus conus</small>
			</div>
		</a> <!-- #branding -->

		<div class="main-navigation">
			<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
			<ul class="menu">
				<li class="menu-item current-menu-item"><a href="{{ route('home') }}">Home</a></li>
				<li class="menu-item"><a href="{{ route('about') }} ">About</a></li>
				<li class="menu-item"><a href="review.html">Movie reviews</a></li>
				<li class="menu-item"><a href="joinus.html">Join us</a></li>
				<li class="menu-item"><a href="contact.html">Contact</a></li>
			</ul> <!-- .menu -->

			<form action="#" class="search-form">
				<input type="text" placeholder="Search...">
				<button><i class="fa fa-search"></i></button>
			</form>
		</div> <!-- .main-navigation -->

		<div class="mobile-navigation"></div>
	</div>
</header>