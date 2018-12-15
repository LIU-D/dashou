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
	<header id="header" class="header-white">
		<div class="container">
			<div class="row">
				<div class="navbar-header">
					<div class="logo">
	                <a href="index.html">
	                	<img src="/dashou/Public/Home/images/logo2.png" alt="">
	                </a>
         		</div><!-- logo end -->
				</div>


				<div class="site-nav-inner">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
	    			</button>

	    			<nav class="collapse navbar-collapse navbar-responsive-collapse navbar-right">

	    				<ul class="nav navbar-nav">

						<li class="dropdown active">
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
		                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">个人中心 <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
                           <li><a href="<?php echo U('Index/personalInfo');?>">个人信息</a></li>
                           <li><a href="<?php echo U('Index/historyBuss');?>">历史业务</a></li>
		                  </ul>
		               </li>

		            </ul><!--/ Nav ul end -->

	    			</nav><!--/ Collapse end -->

				</div><!-- Site nav inner end -->


			</div><!-- Row end -->
		</div><!-- Container end -->
	</header><!--/ Header end -->

	<div id="box-slide" class="owl-carousel owl-theme box-slide">
		<div class="item" style="background-image:url(/dashou/Public/Home/images/slider-main/bg3.jpg)">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title"> A Guarantee For Life &amp; <br/>
							Level Premium For Life Time Protection
						</h2>
                	<p class="box-slide-desc">We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence give them peace of mind.</p>
                	<a href="#" class="slider btn btn-primary">Learn More</a>
					</div>
        		</div>
			</div>

		</div><!-- Item 1 end -->

		<div class="item" style="background-image:url(/dashou/Public/Home/images/slider-main/bg2.jpg)">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title"> Saving For The Future <br/>
 								Premium For Life Time Protection
						</h2>
                	<p class="box-slide-desc">We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence give them peace of mind.</p>
                	<a href="#" class="slider btn btn-primary">Learn More</a>
					</div>
        		</div>
			</div>
		</div><!-- Item 2 end -->

		<div class="item" style="background-image:url(/dashou/Public/Home/images/slider-main/bg4.jpg)">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title"> A Flexible Solutions
							<br /> Secure The Future, Protects What's Important
						</h2>
                	<p class="box-slide-desc">We have been providing stability and reliability to our clients since 1859 to help them live their lives with confidence give them peace of mind.</p>
                	<a href="#" class="slider btn btn-primary">Learn More</a>
					</div>
        		</div>
			</div>
		</div><!-- Item 3 end -->
	</div><!-- Owl carousel -->

	<section class="call-action-all no-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="action-text">
						<h2>Get Immediate Free Consultation !</h2>
					</div>
					<p class="action-btn"><a class="btn btn-primary" href="#">Get A Quote</a></p>
				</div>
			</div>
		</div><!--/ Container end -->
    </section><!-- Call to Action end -->


	<section id="ts-features" class="features-area">
		<div class="container">
			<div class="row text-center">
				<h2 class="title">
					We Have Thoughts
					<span class="title-head">Why Choose Us</span>
				</h2>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-line-chart"></i>
						</span>
						<div class="ts-service-box-content">
							<h3>Competitive pricing</h3>
							<ul>
								<li>Get insurance quote</li>
								<li>Get insurance</li>
								<li>Manage your Insurance</li>
								<li>Learn about insurance</li>
								<li>Products &amp; services</li>
							</ul>
						</div>
					</div>
				</div> <!-- Col 1 end -->

				<div class="col-md-4">
					<div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-diamond"></i>
						</span>
						<div class="ts-service-box-content">
							<h3>Truly Experienced</h3>
							<ul>
								<li>Get insurance quote</li>
								<li>Get insurance</li>
								<li>Manage your Insurance</li>
								<li>Learn about insurance</li>
								<li>Products &amp; services</li>
							</ul>
						</div>
					</div>
				</div> <!-- Col 2 end -->

				<div class="col-md-4">
					<div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-recycle"></i>
						</span>
						<div class="ts-service-box-content">
							<h3>Cover Your Needs</h3>
							<ul>
								<li>Get insurance quote</li>
								<li>Get insurance</li>
								<li>Manage your Insurance</li>
								<li>Learn about insurance</li>
								<li>Products &amp; services</li>
							</ul>
						</div>
					</div>
				</div> <!-- Col 3 end -->

			</div><!-- Content row end -->
		</div><!--/ Container end -->
	</section><!-- About us end -->



	<section id="product-area" class="product-area" style="background-image:url(/dashou/Public/Home/images/product-bg.jpg)">
		<div class="container">
			<div class="row text-center">
				<h2 class="title">
					We've Got You Covered
					<span class="title-head">保险项目</span>
				</h2>
			</div><!--/ Title row end -->

			<!--Isotope filter start -->
			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">全部</a></li>
						<li><a href="#" data-filter=".人身保险">人身保险</a></li>
						<li><a href="#" data-filter=".责任保险">责任保险</a></li>
						<li><a href="#" data-filter=".人寿保险">人寿保险</a></li>
						<li><a href="#" data-filter=".工程保险">工程保险</a></li>
						<li><a href="#" data-filter=".信用保险">信用保险</a></li>
						<li><a href="#" data-filter=".财产保险">财产保险</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->

			<div class="row">

				<div id="isotope" class="isotope">

				<!-- foreach -->
				<?php if(is_array($insurance_list)): foreach($insurance_list as $key=>$insurance): ?><div class="col-sm-4 col-xs-12 <?php echo ($insurance["insurance_categories"]); ?> isotope-item">
						<div style="max-height:220px;overflow:hidden;" class="isotop-img-conatiner">
							<img class="img-responsive" src="/dashou<?php echo ($insurance["insurance_image"]); ?>" alt="">
							<div class="isotope-item-info">
								<?php switch($insurance["insurance_categories"]): case "人身保险": case "责任保险": case "人寿保险": ?><h3 class="isotope-item-title"><a href="<?php echo U('Index/personal');?>"><?php echo ($insurance["insurance_title"]); ?></a></h3>
										<p><a href="<?php echo U('Index/personal');?>" class="btn btn-primary">了解更多</a></p><?php break;?>
									<?php case "工程保险": case "信用保险": case "财产保险": ?><h3 class="isotope-item-title"><a href="<?php echo U('Index/firm');?>"><?php echo ($insurance["insurance_title"]); ?></a></h3>
										<p><a href="<?php echo U('Index/firm');?>" class="btn btn-primary">了解更多</a></p><?php break; endswitch;?>
							</div>
						</div>
					</div><!-- Isotope item 1 end --><?php endforeach; endif; ?><!-- foreach end -->

				</div><!-- Isotope end -->

			</div><!-- Content Row -->

		</div><!--/ Container end -->
		<div class="down-arrow-white"></div>
	</section><!-- Product area end -->

	<section id="featured-tab-area" class="featured-tab-area">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					We Are A Dedicated Firm
					<span class="title-head">Why Choose Us</span>
				</h3>
			</div><!--/ Title row end -->


			<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs col-sm-12 col-xs-12">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-head">
									<i class="fa fa-globe pull-left">&nbsp;</i>
									<span class="tab-text-title">Trusted Since 1976</span>
								</span>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-users pull-left">&nbsp;</i>
									<span class="tab-text-title">2.9M Users Never Wrong</span>
								</span>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-android pull-left">&nbsp;</i>
									<span class="tab-text-title">Easy Quotes and Apps</span>
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-life-ring pull-left">&nbsp;</i>
									<span class="tab-text-title">Secure and Stable</span>
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-user-secret pull-left">&nbsp;</i>
									<span class="tab-text-title">24/7 With Real Person</span>
								</span>
						  	</a>
						</li>

					</ul>
					<div class="tab-content col-sm-12 col-xs-12">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<img class="img-responsive pull-right" src="/dashou/Public/Home/images/tab/featured-tab1.jpg" alt="">
				        	<div class="tab-wrapper">
				        		<h3 class="tab-content-title">A History of Trust and Dependability</h3>
					         <p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend. Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit.</p>
					         <ul class="list-round-arrow">
									<li>There are many variations of passages of Lorem Ipsum</li>
									<li>All the Lorem Ipsum generators on the Internet</li>
									<li>Tend to repeat predefined chunks as necessary</li>
									<li>The point of using Lorem Ipsum is thatl</li>
								</ul>
				        	</div>
				        </div>

				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <img class="img-responsive pull-left" src="/dashou/Public/Home/images/tab/featured-tab2.png" alt="">
				            <h3>Harmony from the World heart</h3>
				            <h4>Simply dummy text of the printing</h4>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        </div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_c">
				            <p class="tab-icon pull-left"><i class="fa fa-android">&nbsp;</i></p>
				            <h3>Harmony from the World heart</h3>
								<h4>Simply dummy text of the printing</h4>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_d">
				            <p><img class="pull-right img-responsive" src="/dashou/Public/Home/images/tab/featured-tab3.png" alt=""></p>
								<h3>Harmony from the World heart</h3>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_e">
				            <p><img class="pull-left img-responsive" src="/dashou/Public/Home/images/tab/featured-tab4.png" alt=""></p>
								<h3>Harmony from the World heart</h3>
								<p>None quis nibh vel erat tincidunt pretium. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.</p>
								<p>Ut urna dui, interdum non blandit sed, hendrerit ultricies mi. Aliquam at scelerisque ligula. Curabitur id laoreet velit.</p>
				        	</div>

					</div><!-- tab content -->
	    		</div><!-- Featured tab end -->
			</div><!--/ Content row end -->

		</div><!--/ Container end -->
	</section><!-- Featured tab end -->

	<section id="ts-content" class="ts-content no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding left">
					<h2>We are Here to Help</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-pie-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>Financial Security</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 1 end -->

						<div class="col-md-6 service-box"><i class="fa fa-line-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>Savings and Investing</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 2 end -->
					</div><!-- 1st row end -->

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-briefcase">&nbsp;</i>
							<div class="service-box-content">
								<h3>Business Goals</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 3 end -->

						<div class="col-md-6 service-box"><i class="fa fa-graduation-cap">&nbsp;</i>
							<div class="service-box-content">
								<h3>Paying for Education</h3>
								<p>Aliquam posuere gravida tristique. Vestibulum dolor turpis, gravida vitae euismod at, consectetur quis felis.</p>
							</div>
						</div><!--/ Box 4 end -->
					</div>
				</div><!-- Content left -->

				<div class="col-md-6 ts-padding right" style="height:600px;background:url(/dashou/Public/Home/images/content-bg.jpg) 50% 50% / cover no-repeat;">
					<a class='popup' href="http://player.vimeo.com/video/100195272?autoplay=1&amp;loop=1" style="position: relative;">
                  <div class="video-icon">
                  	<i class="fa fa-play"></i>
                  	<h2>Watch Our Video</h2>
               	</div>
            	</a>
				</div><!-- Content right -->


			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- Content end -->

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


	<section id="news" class="news">
		<div class="container">
			<div class="down-arrow-color"></div>
			<div class="row text-center">
				<h3 class="title">
					Get Up to Date
					<span class="title-head">业内最新资讯</span>
				</h3>
			</div><!--/ Title row end -->



			<div class="row">
			<!-- foreach -->
			<?php if(is_array($news_list)): foreach($news_list as $key=>$new): ?><div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<div style="overflow: hidden;;height: 216px"><img class="img-responsive" src="/dashou<?php echo ($new["news_image"]); ?>" alt="img"></div>
						<div class="post-body">
							<h4 class="post-title" style="height: 48px; display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">
								<a href="#"><?php echo ($new["news_title"]); ?></a>
							</h4>
							<span class="post-item-date">
								<i class="fa fa-clock-o"></i> <?php echo ($new["news_addtime"]); ?>
							</span>
							<span class="post-item-author">
								<i class="fa fa-user"></i> <?php echo ($new["news_author"]); ?>
							</span>
							<div class="post-text">
								<p style="height: 100px; display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 4;overflow: hidden;">
									<?php echo ($new["news_content"]); ?>
								</p>
							</div>
						</div>
						<a href="<?php echo U('Index/newsSingle');?>?id=<?php echo ($new["news_id"]); ?>" class="btn btn-primary">Read More</a>
					</div><!-- Latest post end -->
				</div><!-- 1st post col end --><?php endforeach; endif; ?><!-- foreach end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	<!-- Partners start -->
	<section id="partners-area" class="partners-area">
		<div class="container">
			<div class="row text-center">
				<h3 class="title">
					People Trust Us
					<span class="title-head">合作伙伴</span>
				</h3>
			</div> <!-- Title row end -->

			<div class="row">
		      <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner1.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner2.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner3.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner4.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner5.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner6.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner7.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner8.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner9.jpg" alt="client">
		          </a>
		        </figure>

		        <figure class="item partner-logo last">
		          <a href="#">
		            <img class="img-responsive" src="/dashou/Public/Home/images/partners/partner10.jpg" alt="client">
		          </a>
		        </figure>

		      </div><!--/ Owl carousel end -->

	    	</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Partners end -->

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