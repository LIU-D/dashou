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
											 <li><a href="<?php echo U('Index/searchAgent');?>">站点查询</a></li>
											 <li><a href="<?php echo U('Main/message');?>">留言板</a></li>
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
									<li><a href="<?php echo U('Main/joinInfo');?>">递交申请</a></li>
								</ul>
							</li>

							<li class="dropdown">
							 <a href="<?php echo U('Main/personalInfo');?>">个人中心</a>
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



	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

					<h3 class="contact-form-title">Information</h3>

	    			<form id="contact-form" action="<?php echo U('check');?>" method="post" role="form">
						<div class="form-group">
							<label>手机号： </label>
							<input class="form-control" type="text" name="phone" id="phone" placeholder="" rows="10" required>
						</div>
						<div class="form-group">
							<label>密&nbsp;&nbsp;&nbsp;&nbsp;码： </label>
							<input class="form-control" type="password" name="password" id="password" placeholder="" rows="10" required>
						</div>
						<div ><br>
							<button style="width: 360px;" class="btn btn-primary solid blank" type="submit">登录</button>
						</div>
					</form>

				</div><!-- Content col end -->

				<div style="height: 303px;overflow: hidden;" class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<img src="/dashou/Public/Home/images/news/news4.jpg" class="img-responsive" alt="">
				</div>

			</div><!-- Content row -->
		</div><!-- Conatiner end -->
	</section><!-- Main container end -->


	<section class="footer-top no-padding">
		<div class="container">
			<div class="footer-top-bg row">
				<div class="col-md-4 footer-box one">
					<i class="fa fa-map-marker">&nbsp;</i>
					<div class="footer-box-content">
						<h3>公司总部</h3>
						<p>后市万黎水内路 A1230， 大寿大厦 北京, 中国.</p>
					</div>
				</div><!--/ Box 1 end -->

				<div class="col-md-4 footer-box two">
					<i class="fa fa-phone">&nbsp;</i>
					<div class="footer-box-content">
						<h3>客服中心</h3>
						<p>中国: (+86) 847-291-4353</p>
						<p>其他: (+86) 237-2325-4855</p>
					</div>
				</div><!--/ Box 2 end -->

				<div class="col-md-4 footer-box three">
					<i class="fa fa-envelope-o">&nbsp;</i>
					<div class="footer-box-content">
						<h3>邮件地址</h3>
						<p>info@dashou.com</p>
						<p>query@dashou.com</p>
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

					<p>大寿秉持“成己为人 成人达己”的企业文化核心理念，努力推进“创新驱动 综合经营
						国际一流”发展战略，增强发展动力、扩大经营布局、服务国家大局，加快转型升级、提质增效。</p>
					<p>以“建设国际一流金融保险集团”为企业愿景，薪火相传，砥砺奋进。</p>
					<p><strong>工作日（周一至周六）</strong> 09.00 - 13.00 / 14.00 - 20.00</p>
				</div><!-- About us end -->

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">有关链接</h3>

					<ul class="list-arrow">
						<li><a href="#">了解保险种类</a></li>
						<li><a href="#">管理保单</a></li>
						<li><a href="#">申请保险</a></li>
						<li><a href="#">产品和服务</a></li>
						<li><a href="#">了解运转</a></li>
						<li><a href="#">提供建议</a></li>
						<li><a href="#">投资风险</a></li>
						<li><a href="#">最新资讯</a></li>
						<li><a href="#">获取报价</a></li>
						<li><a href="#">了解我们</a></li>
						<li><a href="#">前景介绍</a></li>
						<li><a href="#">公司简介</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-12 footer-widget">
					<h3 class="widget-title">与我们联系</h3>
					<div class="newsletter-introtext">
						发送邮件与我们沟通获得最新信息。
					</div>
					<form action="#" method="post" id="newsletter-form" class="newsletter-form">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
							<button class="btn btn-primary">Subscribe</button>
						</div>
					</form>

					<div class="footer-social">
						<h3 class="widget-title">关注我们</h3>
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
						<span>Copyright © 2016 Dasho. All Rights Reserved.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="#">About</a></li>
							<li><a href="#">© Dasho</a></li>
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