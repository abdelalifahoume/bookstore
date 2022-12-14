@extends('layouts.master') 

@section('content')
<div id="site-content">
	<main class="main-content">
		<div class="container">
			<div class="page">
				
				<div class="row">
					<div class="col-md-9">
						<div class="slider">
							<ul class="slides">
								<li><a href="#"><img src="{{ url('assets/dummy/slide-2.jpg') }}" alt="Slide 2"></a></li>
								<li><a href="#"><img src="{{ url('assets/dummy/slide-3.jpg') }}" alt="Slide 3"></a></li>
								<li><a href="#"><img src="{{ url('assets/dummy/slide-1.jpg') }}" alt="Slide 1"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						@foreach ($latesttwolivres as $livre)
							<div class="row">
								<div class="col-sm-6 col-md-12">
									<div class="latest-movie">
										<a href="#"><img src="{{ url('assets/dummy/'.$livre->urlphoto) }}" alt="livre"></a>
									</div>
								</div>
							</div>					
						@endforeach
					</div>
				</div> <!-- .row -->

				
				<div class="row">
					@foreach ($latestforlivres as $livre)
						<div class="col-sm-6 col-md-3">
							<div class="latest-movie">
								<a href="#"><img src="{{ url('assets/dummy/'.$livre->urlphoto) }}" alt="livre"></a>
							</div>
						</div>
					@endforeach
				</div> <!-- .row -->
				



				<div class="row">
					<div class="col-md-4">
						<h2 class="section-title">December premiere</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
						<ul class="movie-schedule">
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
						</ul> <!-- .movie-schedule -->
					</div>
					<div class="col-md-4">
						<h2 class="section-title">November premiere</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
						<ul class="movie-schedule">
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
						</ul> <!-- .movie-schedule -->
					</div>
					<div class="col-md-4">
						<h2 class="section-title">October premiere</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
						<ul class="movie-schedule">
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
							<li>
								<div class="date">16/12</div>
								<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
							</li>
						</ul> <!-- .movie-schedule -->
					</div>
				</div>
				
			</div>
		</div> <!-- .container -->
	</main>

</div>	
@endsection




