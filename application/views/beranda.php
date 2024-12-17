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

	<main>
		<!-- Trending Area Start -->
		<div class="trending-area fix">
			<div class="container">
				<div class="trending-main">
					<!-- Trending Tittle -->
					<div class="row">
						<div class="margin top-12px">
							<div class="trending-tittle">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<!-- Trending Top -->
							<?php foreach ($caraousel as $aa){ ?>
							<div class="trending-top mb-30">
								<div class="trend-top-img">
									<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>">
									<div class="trend-top-cap">
									</div>
								</div>
							</div>
							<?php } ?>
							<!-- Trending Bottom -->
							<div class="trending-bottom">
								<div class="row">
									<?php foreach ($konten as $uu){ ?>
									<div class="col-lg-4">
										<div class="single-bottom mb-35">
											<div class="trend-bottom-img mb-30">
												<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>">
											</div>
											<div class="trend-bottom-cap">
												<span class="color1"><?= $uu['nama'] ?></span>
												<h4><a
														href="<?= base_url('home/artikel/'.$uu['id_konten']) ?>"><?= $uu['judul'] ?></a>
												</h4>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<!-- Riht content -->
						<div class="col-lg-4">
							<?php foreach ($konten as $uu){ ?>
							<div class="trand-right-single d-flex">
								<div class="trand-right-img">
									<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>">
								</div>
								<div class="trand-right-cap">
									<span class="color1"><?= $uu['nama'] ?></span>
									<h4><a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"><?= $uu['judul'] ?></a>
									</h4>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Trending Area End -->
		<!--   Weekly-News start -->
		<div class="weekly-news-area pt-50">
			<div class="container">
				<div class="weekly-wrapper">
					<!-- section Tittle -->
					<div class="row">
						<div class="col-lg-12">
							<div class="section-tittle mb-30">
								<h3>Weekly Top News</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="weekly-news-active dot-style d-flex dot-style">
								<?php foreach ($konten as $uu){ ?>
								<div class="weekly-single">
									<div class="weekly-img">
										<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>">
									</div>
									<div class="weekly-caption">
										<span class="color1"><?= $uu['nama'] ?></span>
										<h4><a
												href="<?= base_url('home/artikel/'.$uu['slug']) ?>"><?= $uu['judul'] ?></a>
										</h4>
									</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Weekly-News -->
		<!--Start pagination -->
		<div class="pagination-area pb-45 text-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="single-wrap d-flex justify-content-center">
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-start">
									<li class="page-item"><a class="page-link" href="#"><span
												class="flaticon-arrow roted"></span></a></li>
									<li class="page-item active"><a class="page-link" href="#">01</a></li>
									<li class="page-item"><a class="page-link" href="#">02</a></li>
									<li class="page-item"><a class="page-link" href="#">03</a></li>
									<li class="page-item"><a class="page-link" href="#"><span
												class="flaticon-arrow right-arrow"></span></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End pagination  -->
	</main>

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
										<li><a href="#">Terms of use</a></li>
										<li><a href="#">Privacy Policy</a></li>
										<li><a href="#">Contact</a></li>
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
