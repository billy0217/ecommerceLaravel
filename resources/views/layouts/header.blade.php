<!--====== HEADER PART START ======-->

<header class="header-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="{{ url(/) }}">
						<img src="assets/images/logo.png" alt="Logo">
					</a> <!-- Logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="bar-icon"></span>
						<span class="bar-icon"></span>
						<span class="bar-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul id="nav" class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a data-scroll-nav="0" href="#home">Home</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#product">Products</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#service">Services</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#showcase">Portfolio</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#team">Team</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#blog">Blog</a>
							</li>
							<li class="nav-item">
								<a data-scroll-nav="0" href="#contact">Contact</a>
							</li>

							@if (Route::has('login'))
								@auth
									<li class="nav-item">
										<a href="{{ url('/home') }}">Cart</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</li>
								@else
									<li class="nav-item">
										<a href="{{ url('login') }}">Login</a>
									</li>
									@if (Route::has('register'))
										<li class="nav-item">
											<a href="{{ url(route('register')) }}">Register</a>
										</li>
									@endif
								@endauth
								
							@endif
						</ul> <!-- navbar nav -->
					</div>
				</nav> <!-- navbar -->
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</header>

<!--====== HEADER PART ENDS ======-->