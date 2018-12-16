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

	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6 col-xs-12 top-social">
					<!-- <ul class="unstyled">
						<li>
							<a title="Facebook" href="#">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="instagram" href="#">
								<span class="social-icon"><i class="fa fa-instagram"></i></span>
							</a>
						</li>
					</ul> -->
				</div><!--/ Top social end -->

				<div class="col-md-6 col-sm-6 col-xs-12 top-menu ">
					<ul class="unstyled">
						<li><a href="#">注册</a></li>
						<li><a href="#">登录</a></li>
					</ul>
				</div><!--/ Top menu end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

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

						<li class="dropdown active">
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
									   <li><a href="<?php echo U('Index/searchAgent');?>">站点查询</a></li>
									   <li><a href="<?php echo U('Index/message');?>">在线客服</a></li>
									 <li><a href="#">智能客服</a></li>
									 <li><a href="<?php echo U('Index/call');?>">电话查询</a></li>
                      				</ul>
                      			</li>
		                  </ul>
		               </li>

						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown">加入我们 <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu" role="menu">
									<li><a href="<?php echo U('Index/firmInfo');?>">公司简介</a></li>
								<li><a href="<?php echo U('Index/outlook');?>">行业前景</a></li>
								<li><a href="<?php echo U('Index/showAgent');?>">优秀代理点</a></li>
								<li><a href="<?php echo U('Index/joinInfo');?>">递交申请</a></li>
							</ul>
						</li>

						<li class="dropdown">
						 <a href="<?php echo U('Index/personalInfo');?>">个人中心</a>
						 </li>

							</ul><!--/ Nav ul end -->
						</div><!--/ Collapse end -->

					</div><!-- Site Navbar inner end -->

					<div class="find-agent pull-right">
						<a href="#">Find Agent</a>
					</div>

				</div><!--/ Col end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</nav><!--/ Navigation end -->

	<div id="banner-area" class="banner-area" style="background-image:url(/dashou/Public/Home/images/banner/banner5.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title">News</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>News</li>
			            <li><a href="#"> News Single</a></li>
		          	</ul>
	        		</div>
	        	</div>
       	</div>
    	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->


	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

					<div class="post-content">
						<div class="post-media post-image">
							<img src="/dashou<?php echo ($news["news_image"]); ?>" class="img-responsive" alt="">
						</div>

						<div class="post-body">
							<div class="entry-header">
								<span class="post-meta-date"><i class="fa fa fa-clock-o"></i><?php echo ($news["news_addtime"]); ?></span>
   							<h2 class="entry-title">
					 				<a href="#"><?php echo ($news["news_title"]); ?></a>
					 			</h2>
					 			<div class="post-meta">
									<span class="post-author">
   									Posted By <a href="#"><?php echo ($news["news_author"]); ?></a>
   								</span>
								</div>
							</div><!-- header end -->

							<div class="entry-content">
									<?php echo (stripslashes(htmlspecialchars_decode($news["news_content"]))); ?>
							</div>

							<div class="tags-area clearfix">
								<div class="post-tags pull-left">
		   						<a href="#">Mergers</a>
		   						<a href="#">Agency</a>
		   						<a href="#">Risk Share</a>
	   						</div>
	   						<div class="share-items pull-right">
	   							<ul class="post-social-icons unstyled">
	   								<li class="social-icons-head">Share:</li>
	   								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
	   								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
	   								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
	   								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
	   							</ul>
	   						</div>
							</div>

						</div><!-- post-body end -->
					</div><!-- post content end -->

					<div class="author-box">
						<div class="author-img pull-left">
							<img src="/dashou/Public/Home/images/news/avator1.jpg" alt="">
						</div>
						<div class="author-info">
							<h3>Anger Mathe <span>Risk Manager</span></h3>
							<p>Lisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad vene minim veniam, quis nostrud exercitation ullamco laboris nisi ex ea commodo.</p>
							<p class="author-url">Website: <span><a href="#">http://www.saifway.com</a></span></p>

						</div>
					</div> <!-- Author box end -->





				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<div class="sidebar sidebar-right">

						<div class="widget widget-search">
							<div id="search" class="input-group">
								<input class="form-control" placeholder="Search" type="search">
								<span class="input-group-btn">
									<i class="fa fa-search"></i>
								</span>
							</div>
						</div><!-- Search end -->

						<div class="widget recent-posts">
							<h3 class="widget-title">Recent Posts</h3>
							<ul class="unstyled clearfix">
		               	<li>
		                    <div class="posts-thumb pull-left">
		                    		<a href="#"><img alt="img" src="/dashou/Public/Home/images/news/news1.jpg"></a>
		                    </div>
		                    <div class="post-info">
		                        <h4 class="entry-title">
		                        	<a href="#">Health insurer out risk-based deal for costly cholesterol</a>
		                        </h4>
										<span class="post-date"> January 27, 2016</span>
		                    </div>
		                    <div class="clearfix"></div>
		                  </li><!-- 1st post end-->

		                  <li>
		                    <div class="posts-thumb pull-left">
		                    		<a href="#"><img alt="img" src="/dashou/Public/Home/images/news/news2.jpg"></a>
		                    </div>
		                    <div class="post-info">
		                        <h4 class="entry-title">
		                        	<a href="#">This is another lorem ipsum post title of the day</a>
		                        </h4>
										<span class="post-date"> February 11, 2016</span>
		                    </div>
		                    <div class="clearfix"></div>
		                  </li><!-- 1st post end-->

		                  <li>
		                    <div class="posts-thumb pull-left">
		                    		<a href="#"><img alt="img" src="/dashou/Public/Home/images/news/news3.jpg"></a>
		                    </div>
		                    <div class="post-info">
		                        <h4 class="entry-title">
		                        	<a href="#">Low interest rates, rising equities boost insurer mergers</a>
		                        </h4>
										<span class="post-date"> February 19, 2015</span>
		                    </div>
		                    <div class="clearfix"></div>
		                  </li><!-- 1st post end-->
		               </ul>

						</div><!-- Recent post end -->

						<div class="widget">
							<h3 class="widget-title">Categories</h3>
							<ul class="arrow nav nav-tabs nav-stacked">
		                  <li><a href="#">Insurance</a></li>
		                  <li><a href="#">Risk Management</a></li>
		                  <li><a href="#">Policy</a></li>
		                  <li><a href="#">Mergers</a></li>
		                  <li><a href="#">Agency</a></li>
		              	</ul>
						</div><!-- Categories end -->

						<div class="widget">
							<h3 class="widget-title">Archives </h3>
							<ul class="arrow nav nav-tabs nav-stacked">
			              	<li><a href="#">Feburay 2016</a></li>
		                  <li><a href="#">January 2016</a></li>
		                  <li><a href="#">December 2015</a></li>
		                  <li><a href="#">November 2015</a></li>
		                  <li><a href="#">October 2015</a></li>
			            </ul>
						</div><!-- Archives end -->

						<div class="widget widget-tags">
							<h3 class="widget-title">Insurance </h3>
							<ul class="unstyled clearfix">
			              	<li><a href="#">Policy</a></li>
		                  <li><a href="#">Benefits</a></li>
		                  <li><a href="#">Mortgage</a></li>
		                  <li><a href="#">Agency</a></li>
		                  <li><a href="#">Risk Share</a></li>
		                  <li><a href="#">Technology</a></li>
			            </ul>
						</div><!-- Tags end -->


					</div><!-- Sidebar end -->
				</div><!-- Sidebar Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->

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