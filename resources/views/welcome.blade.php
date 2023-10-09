
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="{{asset('icon.png')}}">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="{{asset('css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<title>WiseOwl</title>
</head>
<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="{{route('welcome')}}" class="logo m-0 float-start">WiseOwl<span class="text-primary">.</span></a>
						</div>
						<div class="col-8 text-center ">
							<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
								<li class="active"><a href="{{route('welcome')}}">Home</a></li>
								<li><a href="{{route('login')}}">Sign In</a></li>
								<li><a href="{{route('register')}}">Sign Up</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="hero overlay">
		<img src="images/blob.svg" alt="" class="img-fluid blob">
		<div class="container">
			<div class="row align-items-center justify-content-between pt-5">
				<div class="col-lg-6 text-center text-lg-start pe-lg-5">
					<h1 class="heading text-white mb-3" data-aos="fade-up">Start publishing your professional projects</h1>
					<p class="text-white mb-5" data-aos="fade-up" data-aos-delay="100">At WiseOwl you can find the ideal platform to start your professional content publication</p>
					<div class="align-items-center mb-5 mm" data-aos="fade-up" data-aos-delay="200">
						<a href="{{route('register')}}" class="btn btn-outline-white-reverse me-4">Start</a>
					</div>
				</div>
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
					<div class="img-wrap">
						<img src="images/img-1.png" alt="Image" class="img-fluid rounded">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-4 mb-lg-0">
					<img src="images/img-2.jpg" alt="Image" class="img-fluid rounded
					">
				</div>
				<div class="col-lg-4 ps-lg-2">
					<div class="mb-5">
						<h2 class="text-light">What will you find?</h2>
						<p>This is a platform focused on the publication of projects carried out by development teams, in addition to being able to find:</p>
					</div>
					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-wallet-fill me-4"></span>
						</div>
						<div>
							<h3>Professional portfolio</h3>
							<p>When you create your account on the platform you can join different development groups, as well as in the creation of projects, which will help you have references in your professional portfolio.</p>
						</div>
					</div>

					<div class="d-flex mb-3 service-alt">
						<div>
							<span class="bi-pie-chart-fill me-4"></span>
						</div>
						<div>
							<h3>Developers community</h3>
							<p>On the platform you can find different publications that may be to your liking, thus knowing the latest in the development of technologies.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>


<div class="section sec-news">
	<div class="container">
		<div class="row mb-5">
			<div class="col-lg-7">
				<h2 class="heading text-success">Latest News</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="card post-entry">
					<img src="images/img-1.png" class="card-img-top" alt="Image">
					<div class="card-body">
						<div><span class="text-uppercase font-weight-bold date">Oct 20, 2023</span></div>
						<h5 class="card-title text-success">First version release</h5>
						<p>We are pleased to report that as of this moment the platform is fully operational.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="widget">
					<h5>know us</h5>
					<h3>Social</h3>
					<ul class="list-unstyled social">
						<li><a href="#"><span class="bi bi-facebook"></span></a></li>
						<li><a href="#"><span class="bi bi-twitter"></span></a></li>
						<li><a href="#"><span class="bi bi-linkedin"></span></a></li>
						<li><a href="#"><span class="bi bi-pinterest"></span></a></li>
						<li><a href="#"><span class="bi bi-dribbble"></span></a></li>
					</ul>
				</div> <!-- /.widget -->
			</div> <!-- /.col-lg-4 -->
		</div> <!-- /.row -->

		<div class="row mt-5">
			<div class="col-12 text-center">
            <p>Copyright ©2023. All Rights Reserved. Designed by <a href="http://miportafolio.surge.sh/">Milton Stiven Gonzalez Pinzon</a></p>
          </div>
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
    	<div class="spinner-border text-primary" role="status">
    		<span class="visually-hidden">Loading...</span>
    	</div>
    </div>



    <script src="{{asset('js/glightbox.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/counter.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
  </body>
  </html>
