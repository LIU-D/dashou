<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
   <title>Saifway - Insurance Agency Html Template</title>


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/dashou/Public/Home/images/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/dashou/Public/Home/images/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="/dashou/Public/Home/images/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="/dashou/Public/Home/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="/dashou/Public/Home/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="/dashou/Public/Home/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="/dashou/Public/Home/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="/dashou/Public/Home/css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="/dashou/Public/Home/css/owl.carousel.css">
	<link rel="stylesheet" href="/dashou/Public/Home/css/owl.theme.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="/dashou/Public/Home/css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="/dashou/Public/Home/js/html5shiv.js"></script>
      <script src="/dashou/Public/Home/js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">

	
	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-sm-3">
				<a href="index.html">
					<img src="/dashou/Public/Home/images/logo.png" alt="">
				</a>
			 </div><!-- logo end -->
	
				<div class="col-xs-12 col-sm-7 header-right">
					<ul class="top-info">
							<li>
								<div class="info-box"><span class="info-icon"><i class="fa fa-map-marker">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">总部</p>
										<p class="info-box-subtitle">3021 北京， 中国</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">(+89) 847-291-4353</p>
										<p class="info-box-subtitle">info@dashou.com</p>
									</div>
								</div>
							</li>
							<li>
								<div class="info-box"><span class="info-icon"><i class="fa fa-compass">&nbsp;</i></span>
									<div class="info-box-content">
										<p class="info-box-title">9:00 - 20:00</p>
										<p class="info-box-subtitle">周一至周六</p>
									</div>
								</div>
							</li>
						</ul>
				</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</header><!--/ Header end -->
	
	<nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
	
						<div class="collapse navbar-collapse navbar-responsive-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown ">
									<a href="<?php echo U('Index/index');?>">首页</a>
								</li>
								
								<li class="dropdown">
								 <a href="<?php echo U('Index/newsList');?>">行业资讯</a>
								 </li>
				 
								<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">业务介绍 <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
											   <li><a href="<?php echo U('Index/personal');?>">个人客户</a></li>
											   <li><a href="<?php echo U('Index/firm');?>">企业客户</a></li>
										</ul>
								</li>
				 
							   <li class="dropdown">
							   <a href="#" class="dropdown-toggle" data-toggle="dropdown">服务中心 <i class="fa fa-angle-down"></i></a>
								 <ul class="dropdown-menu" role="menu">
										<li><a href="<?php echo U('Index/personalService');?>">个人客户中心</a></li>
										<li><a href="<?php echo U('Index/firmService');?>">企业客户中心</a></li>
										<li class="dropdown-submenu">
										   <a href="#">联系服务人员</a>
										   <ul class="dropdown-menu">
											   <li><a href="<?php echo U('Index/searchAgent');?>">查询营业网点</a></li>
											   <li><a href="<?php echo U('Index/message');?>">在线客服</a></li>
											 <li><a href="#">智能客服</a></li>
											 <li><a href="<?php echo U('Index/call');?>">电话查询</a></li>
											  </ul>
										  </li>
								  </ul>
							   </li>
		
								<li class="dropdown active">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">加入我们 <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
											<li><a href="<?php echo U('Index/firmInfo');?>">公司简介</a></li>
										<li><a href="<?php echo U('Index/outlook');?>">行业前景</a></li>
										<li><a href="<?php echo U('Index/showAgent');?>">优秀代理点</a></li>
										<li><a href="<?php echo U('Index/joinInfo');?>">递交申请</a></li>
									</ul>
								</li>
										
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
								   <li><a href="<?php echo U('Index/personalInfo');?>">个人信息</a></li>
								   <li><a href="<?php echo U('Index/historyBuss');?>">历史业务</a></li>
								</ul>
								</li>
	
							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->
	
					</div><!-- Site Navbar inner end -->
	
					<div class="find-agent pull-right">
							<?php if(!isset($_SESSION['name'])): ?><a href="<?php echo U('Index/login');?>">点此 登录</a>
							<?php else: ?><a href="<?php echo U('Index/logout');?>">你好， <?php echo (session('name')); ?> </a><?php endif; ?>
						</div>
	
				</div><!--/ Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</nav><!--/ Navigation end -->

	<div id="banner-area" class="banner-area" style="background-image:url(/dashou/Public/Home/images/banner/banner2.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">About Us</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company Pages</li>
			            <li><a href="#"> About Us</a></li>
		          	</ul>
	        		</div>
	        	</div>
       	</div>
    	</div><!-- Subpage title end -->
	</div><!-- Banner area end --> 


	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row text-center">
						<h2 class="title">
							History Of Dependability
							<span class="title-head">Our History &amp; Purpose</span>
						</h2>
					</div><!--/ Title row end -->

					<div class="row">
						<div class="col-md-6">
							<div id="page-slide" class="owl-carousel owl-theme page-slide">
								<div class="item">
									<img class="img-responsive" src="/dashou/Public/Home/images/slider-pages/slide-page1.jpg" alt="">
								</div>

								<div class="item">
									<img class="img-responsive" src="/dashou/Public/Home/images/slider-pages/slide-page2.jpg" alt="">
								</div>

								<div class="item">
									<img class="img-responsive" src="/dashou/Public/Home/images/slider-pages/slide-page3.jpg" alt="">
								</div>
							</div><!-- Owl carousel -->

						</div><!-- Slideshow col end -->

						<div class="col-md-6">
							<h3 class="page-content-title first">What Does Saifway Means</h3>
							<p>Oat cake oat cake dessert brownie. Gummies tiramisu tart jujubes jelly beans macaroon danish pie muffin. Soufflé pudding brownie pudding fruitcake marshmallow I love. Dragée jujubes chocolate cake jelly beans. Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Aenean lacinia bibendum consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p>

							<ul class="list-round-arrow">
								<li>There are many variations of passages of Lorem Ipsum</li>
								<li>All the Lorem Ipsum generators on the Internet</li>
								<li>Tend to repeat predefined chunks as necessary</li>
								<li>Soufflé pudding brownie pudding fruitcake</li>
								<li>Donec id elit non mi porta ut gravida at eget metus</li>
								<li>Duis mollis, est non commodo luctus</li>
							</ul>
						</div>
					</div><!-- Content row -->

					<div class="gap-30">&nbsp;</div>

					<div class="row">
						<div class="col-md-6">
							<h3 class="page-content-title">Products To Meet You</h3>
							<p>Oat cake oat cake dessert brownie. Gummies tiramisu tart jujubes jelly beans macaroon danish pie muffin. Soufflé pudding brownie pudding fruitcake marshmallow I love. Dragée jujubes chocolate cake jelly beans. Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Aenean lacinia bibendum consectetur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio.</p>
						</div>
					<div class="col-md-6">
					<h3 class="page-content-title-classic">Our Corporate Responsibility</h3>
					Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur. Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Gummies tiramisu tart jujubes jelly beans macaroon danish pie muffin chupa chups oat cake liquorice.</div>
					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


	<section id="content-bottom" class="content-bottom solid-bg">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Have Thoughts
					<span class="title-head">What We Believe</span>
				</h3>
			</div>

			<div class="row">
				<div class="col-md-6">
				   <div class="ts-service-box">
				      <span class="ts-service-icon"><i class="fa fa-paper-plane"></i></span>
				      <div class="ts-service-box-content">
				         <h3>We Have Vision</h3>
				         <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
				         <a href="#">Read More </a>
				      </div>
				   </div>
				</div>

				<div class="col-md-6">
				   <div class="ts-service-box">
				      <span class="ts-service-icon"><i class="fa fa-diamond"></i></span>
				      <div class="ts-service-box-content">
				         <h3>We Give the Values</h3>
				         <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
				         <a href="#">Read More </a>
				      </div>
				   </div>
				</div>
			</div><!-- Content bottom row 1 end -->

			<div class="gap-20"></div>

			<div class="row">
				<div class="col-md-6">
				   <div class="ts-service-box">
				      <span class="ts-service-icon"><i class="fa fa-anchor"></i></span>
				      <div class="ts-service-box-content">
				         <h3>We Have Mission</h3>
				         <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
				         <a href="#">Read More </a>
				      </div>
				   </div>
				</div>

				<div class="col-md-6">
				   <div class="ts-service-box">
				      <span class="ts-service-icon"><i class="fa fa-language"></i></span>
				      <div class="ts-service-box-content">
				         <h3>We are A Brand</h3>
				         <p>Aenean et dolor pretium, feugiat leom nongial, aliquettiabser libero. Consectetur ut vestibulum vivamus vestibulum accumsa.</p>
				         <a href="#">Read More </a>
				      </div>
				   </div>
				</div>
			</div><!-- Content bottom row 1 end -->

		</div><!-- Container end -->
	</section><!-- Content bottom end -->

	<section id="testimonial" class="testimonial">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Love To Hear
					<span class="title-head">Words From Our Customers</span>
				</h3>
			</div><!--/ Title row end -->

			<div class="row">

				<div id="testimonial-slide" class="owl-carousel owl-theme testimonial-slide">
				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial1.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Leslie R. Kelley,</span>
				         <span class="quotes-subtext">Manager, Luina Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 1 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial2.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Kevin Dixon,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 2 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial3.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Michael J. Higgins,</span>
				         <span class="quotes-subtext">Rtd. Army Officer</span>
				       	
				     </div>
				  </div><!--/ Item 3 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial4.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Tara Gray,</span>
				         <span class="quotes-subtext">Accountant, Private Firm</span>
				       	
				     </div>
				  </div><!--/ Item 4 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial5.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Connie Tinker,</span>
				         <span class="quotes-subtext">Govt. Official</span>
				       	
				     </div>
				  </div><!--/ Item 5 end -->

				  <div class="item">
				     <div class="testimonial-quote-item">
				     		<img class="testimonial-thumb" src="/dashou/Public/Home/images/clients/testimonial6.png" alt="testimonial">
				         <span class="quote-text">
				           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
				         </span>
				         <span class="quotes-author">Glen E. Green,</span>
				         <span class="quotes-subtext">School Teacher</span>
				       	
				     </div>
				  </div><!--/ Item 6 end -->

				</div><!--/ Testimonial carousel end-->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Testimonial end -->

	<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Head Office</h3>
						<p>SaifWay Center, 3021 Horizon Circle Tukwila, WA-98000.</p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Call Center</h3>
						<p>Mobile: (+8) 847-291-4353</p>
						<p>Phone: (+8) 847-291-4873</p>
					</div>
				</div><!--/ Box 2 end -->
				
				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<h3>Email</h3>
						<p>info@saifway.com</p>
						<p>query@saifway.com</p>
					</div>
				</div><!--/ Box 3 end -->
				
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Footer top end -->

   
	<section id="facts" class="facts no-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="intro-title">
							sucessful Milestone Area
							<span class="title-head"> The Importance Of Being Covered</span>
						</h2>
						<p>We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence, to give them peace of mind, and enable them to realize their dreams for their loved ones and their legacy.We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence, to give them peace of mind, and enable them to realize their dreams for their loved ones and their legacy.</p>
						<p><a class="btn btn-dark" href="#">Talk to Us</a></p>
	
					</div><!-- Col end -->
	
					<div class="col-md-6">
						<div class="facts-wrapper">
							<div class="col-md-6 ts-facts">
								<div class="ts-facts-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="ts-facts-content">
									<h2 class="ts-facts-num"><span class="counterUp">7968</span></h2>
									<h3 class="ts-facts-title">Insurance Policies</h3>
								</div>
							</div><!-- Col end -->
	
							<div class="col-md-6 ts-facts">
								<div class="ts-facts-icon">
									<i class="fa fa-globe"></i>
								</div>
								<div class="ts-facts-content">
									<h2 class="ts-facts-num"><span class="counterUp">127</span></h2>
									<h3 class="ts-facts-title">Countries World Wide</h3>
								</div>
							</div><!-- Col end -->
	
							<div class="col-md-6 ts-facts">
								<div class="ts-facts-icon">
									<i class="fa fa-smile-o"></i>
								</div>
								<div class="ts-facts-content">
									<h2 class="ts-facts-num"><span class="counterUp">2979</span></h2>
									<h3 class="ts-facts-title">Happy Customers</h3>
								</div>
							</div><!-- Col end -->
	
							<div class="col-md-6 ts-facts">
								<div class="ts-facts-icon">
									<i class="fa fa-street-view"></i>
								</div>
								<div class="ts-facts-content">
									<h2 class="ts-facts-num"><span class="counterUp">1798</span></h2>
									<h3 class="ts-facts-title">Insurance Agencies</h3>
								</div>
							</div>
						</div> <!-- Facts end -->
					</div><!-- Col end -->
				</div><!--/ Content row end -->
			</div><!--/ Container end -->
		</section><!-- Facts end -->
   

	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 footer-widget footer-about">
					<div class="footer-logo">
						<img src="/dashou/Public/Home/images/footer-logo.png" alt="">
					</div>

					<p>Saifway Insurance company Phasellus et nisl tellus. Etiam facilisis eu nisi scelerisque faucibus. Proin semper suscipit magna, nec imperdiet lacus semper vitae. Sed hendrerit enim non justo posuere placerat.</p>
					<p>We are a awward winning multinational company. We believe in quality and standard worldwide.</p>
					<p><strong>Mon/Friday</strong> 10.00 - 13.00 / 14.00 - 18.00</p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Important Links</h3>

					<ul class="list-arrow">
						<li><a href="#">Get insurance</a></li>
						<li><a href="#">Manage Insurance</a></li>
						<li><a href="#">Learn insurance</a></li>
						<li><a href="#">Products &amp; services</a></li>
						<li><a href="#">Why SaifWay</a></li>
						<li><a href="#">How claims work</a></li>
						<li><a href="#">Why use an adviser?</a></li>
						<li><a href="#">The risk</a></li>
						<li><a href="#">Underinsurance</a></li>
						<li><a href="#">Manage Insurance</a></li>
						<li><a href="#">Learn insurance</a></li>
						<li><a href="#">Insurance Quotes</a></li>
						<li><a href="#">Product Disclosure</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">Subscribe with us</h3>
					<div class="newsletter-introtext">
						Subscribe with our newsletters and receive news about our discounts.
					</div>
					<form action="#" method="post" id="newsletter-form" class="newsletter-form">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
							<button class="btn btn-primary">Subscribe</button>
						</div>
					</form>

					<div class="footer-social">
						<h3 class="widget-title">Stay Connected</h3>
						<ul>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div><!-- Footer social end -->
				</div>
			</div><!--/ Content row end -->

			<div class="row copyright">
				<div class="col-xs-12 col-sm-5">
					<div class="copyright-info">
						<span>Copyright © 2016 Saifway. All Rights Reserved.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="#">About</a></li>
							<li><a href="#">© Saifway</a></li>
							<li><a href="#">Legal</a></li>
							<li><a href="#">Privacy Statement</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-double-up"></i>
				</button>
			</div>

		</div><!--/ Container end -->
	</footer><!-- Footer end -->

	


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="/dashou/Public/Home/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="/dashou/Public/Home/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="/dashou/Public/Home/js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="/dashou/Public/Home/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="/dashou/Public/Home/js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="/dashou/Public/Home/js/jquery.colorbox.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="/dashou/Public/Home/js/isotope.js"></script>
	<script type="text/javascript" src="/dashou/Public/Home/js/ini.isotope.js"></script>
	<!-- Google Map API Key Source -->
	<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
	<!-- For Google Map -->
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
	<!--<script type="text/javascript" src="/dashou/Public/Home/js/gmap3.min.js"></script>-->
	<!-- Template custom -->
	<script type="text/javascript" src="/dashou/Public/Home/js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>
</html>