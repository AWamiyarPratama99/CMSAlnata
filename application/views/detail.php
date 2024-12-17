<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $konfig->judul_website; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/news/') ?>/assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/ticker-style.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/slicknav.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/news/') ?>/assets/css/style.css">
</head>

<body>

	<!-- Preloader Start -->
	<!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url('assets/news/') ?>/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
	<!-- Preloader Start -->

	<header>
		<!-- Header Start -->
		<div class="header-area">
			<div class="main-header ">
				<div class="header-top black-bg d-none d-md-block">
					<div class="container">
						<div class="col-xl-12">
						</div>
					</div>
				</div>
				<div class="header-mid d-none d-md-block">
					<div class="container">
						<div class="row d-flex align-items-center">
							<!-- Logo -->
							<div class="col-xl-3 col-lg-3 col-md-3">
								<div class="logo">
									<a href="index.html"><img
											src="<?= base_url('assets/news/') ?>/assets/img/logo/logo.png" alt=""></a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="header-bottom header-sticky">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-xl-10 col-lg-10 col-md-12 header-flex">
								<!-- sticky -->
								<div class="sticky-logo">
									<a href="index.html"><img
											src="<?= base_url('assets/news/') ?>/assets/img/logo/logo.png" alt=""></a>
								</div>
								<!-- Main-menu -->
								<div class="main-menu d-none d-md-block">
									<nav>
										<ul id="navigation">
											<li><a href="<?= base_url() ?>">Home</a></li>
											<?php foreach ($kategori as $kate){ ?>
											<li><a
													href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
											</li>
											<?php } ?>
											<li><a href="">Pages</a>
												<ul class="submenu">
													<li><a href=""></a></li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-xl-2 col-lg-2 col-md-4">
								<div class="header-right-btn f-right d-none d-lg-block">
									<i class="fas fa-search special-tag"></i>
									<div class="search-box">
										<form action="#">
											<input type="text" placeholder="Search">

										</form>
									</div>
								</div>
							</div>
							<!-- Mobile Menu -->
							<div class="col-12">
								<div class="mobile_menu d-block d-md-none"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>
	<div class="col-lg-8">
		<!-- Trending Tittle -->
		<div class="about-right mb-90">
			<div class="about-img">
				<img src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>">
			</div>
			<div class="section-tittle mb-30 pt-30">
				<h3><?= $konten->judul; ?></h3>
			</div>
			<div class="about-prea">
				<p class="about-pera1 mb-25">
					<?= $konten->deskripsi ?></p>
			</div>
			<div class="section-tittle">
				<h3><?= $konten->judul ?></h3>
			</div>
			<div class="about-prea">
				<p class="about-pera1 mb-25">
					<?= $konten->keterangan ?></p>
			</div>
			<div class="social-share pt-30">
				<div class="section-tittle">
					<h3 class="mr-20">Share:</h3>
					<ul>
						<li><a href="#"><img src="<?= base_url('assets/news')?>/assets/img/news/icon-ins.png"
									alt=""></a></li>
						<li><a href="#"><img src="<?= base_url('assets/news')?>/assets/img/news/icon-fb.png" alt=""></a>
						</li>
						<li><a href="#"><img src="<?= base_url('assets/news')?>/assets/img/news/icon-tw.png" alt=""></a>
						</li>
						<li><a href="#"><img src="<?= base_url('assets/news')?>/assets/img/news/icon-yo.png" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- From -->
		<div class="row">
			<div class="col-lg-8">
				<form class="form-contact contact_form mb-80" action="contact_process.php" method="post"
					id="contactForm" novalidate="novalidate">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<textarea class="form-control w-100 error" name="message" id="message" cols="30"
									rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"
									placeholder="Enter Message"></textarea>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control error" name="name" id="name" type="text"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
									placeholder="Enter your name">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control error" name="email" id="email" type="email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
									placeholder="Email">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<input class="form-control error" name="subject" id="subject" type="text"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
									placeholder="Enter Subject">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="button button-contactForm boxed-btn">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<footer>
		<!-- Footer Start-->
		<div class="footer-area footer-padding fix">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="col-xl-5 col-lg-5 col-md-7 col-sm-12">
						<div class="single-footer-caption">
							<div class="single-footer-caption">
								<!-- logo -->
								<div class="footer-logo">
									<a href="index.html"><img
											src="<?= base_url('assets/news/') ?>/assets/img/logo/logo2_footer.png"
											alt=""></a>
								</div>
								<div class="footer-tittle">
									<div class="footer-pera">
										<p>My name is Alnata Wamiyar Pratama, I live in Gaum RT 4/2 Gaum, Tasikmadu,
											Karanganyar. My current status is studying at SMKN 2 Karanganyar majoring in
											Software Engineering.
											You can call me Alnata. My hobbies are Sport and playing online games. I was
											born on November 09, 2007 in Karanganyar.</p>
									</div>
								</div>
								<!-- social -->
								<div class="footer-social">
									<a href="https://facebook.com/AWamiyarPratama"><i class="fab fa-facebook"></i></a>
									<a href="https://instagram.com/awamiyarpratama/"><i
											class="fab fa-instagram"></i></a>
									<a href="+62 895-1713-3935"><i class="fab fa-whatsapp"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
						<div class="single-footer-caption mt-60" style="
        background-color: #f9f9f9; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);">
							<div class="footer-tittle">
								<h4 style="
                color: #333; 
                font-weight: bold; 
                margin-bottom: 15px;">
									Contact Us
								</h4>
								<ul class="footer-links" style="list-style: none; padding: 0; margin: 0;">
									<li style="margin-bottom: 10px;">
										<a href="#" style="
                        color: #555; 
                        font-size: 14px; 
                        text-decoration: none; 
                        display: flex; 
                        align-items: center; 
                        gap: 10px;">
											<i class="fa fa-map-marker"></i> 04/02 Gaum City
										</a>
									</li>
									<li style="margin-bottom: 10px;">
										<a href="#" style="
                        color: #555; 
                        font-size: 14px; 
                        text-decoration: none; 
                        display: flex; 
                        align-items: center; 
                        gap: 10px;">
											<i class="fa fa-phone"></i> +62 895-1713-3935
										</a>
									</li>
									<li style="margin-bottom: 10px;">
										<a href="#" style="
                        color: #555; 
                        font-size: 14px; 
                        text-decoration: none; 
                        display: flex; 
                        align-items: center; 
                        gap: 10px;">
											<i class="fa fa-envelope"></i> awamiyarpratama@gmail.com
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
						<div class="single-footer-caption mb-50 mt-60">

						</div>
					</div>
				</div>
			</div>
			<!-- footer-bottom aera -->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="footer-border">
						<div class="row d-flex align-items-center justify-content-between">
							<div class="col-lg-6">
								<div class="footer-copy-right">
									<p>
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										Copyright &copy;<script>
											document.write(new Date().getFullYear());

										</script> All rights reserved | This template is made with <i class="ti-heart"
											aria-hidden="true"></i> by <a
											href="https://awamiyarpratama99.github.io/Portofolio/"
											target="_blank">AWamiyarPratama</a>
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									</p>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="footer-menu f-right">
									<ul>
										<li><a href="">Terms of use</a></li>
										<li><a href="">Privacy Policy</a></li>
										<li><a href="">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End-->
	</footer>

	<!-- JS here -->

	<!-- All JS Custom Plugins Link Here here -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<!-- Jquery, Popper, Bootstrap -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/popper.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/bootstrap.min.js"></script>
	<!-- Jquery Mobile Menu -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.slicknav.min.js"></script>

	<!-- Jquery Slick , Owl-Carousel Plugins -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/owl.carousel.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/slick.min.js"></script>
	<!-- Date Picker -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/gijgo.min.js"></script>
	<!-- One Page, Animated-HeadLin -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/wow.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/animated.headline.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.magnific-popup.js"></script>

	<!-- Breaking New Pluging -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.ticker.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/site.js"></script>

	<!-- Scrollup, nice-select, sticky -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.scrollUp.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.nice-select.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.sticky.js"></script>

	<!-- contact js -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/contact.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.form.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.validate.min.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/mail-script.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/jquery.ajaxchimp.min.js"></script>

	<!-- Jquery Plugins, main Jquery -->
	<script src="./<?= base_url('assets/news/') ?>/assets/js/plugins.js"></script>
	<script src="./<?= base_url('assets/news/') ?>/assets/js/main.js"></script>

</body>

</html>
