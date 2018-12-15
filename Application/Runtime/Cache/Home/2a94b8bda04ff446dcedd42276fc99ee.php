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
						 <a href="<?php echo U('Index/personalInfo');?>">个人中心</a>
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
						<h2 class="box-slide-title"> 健康的维护 &amp; <br/>
							生命及财产的安全保障
						</h2>
                	<p class="box-slide-desc">
										自1989年以来，我们一直为客户提供稳定性和可靠性，帮助他们充满自信地生活，让他们安心。
									</p>
                	<a href="<?php echo U('Index/personal');?>" class="slider btn btn-primary">了解更多</a>
					</div>
        		</div>
			</div>

		</div><!-- Item 1 end -->

		<div class="item" style="background-image:url(/dashou/Public/Home/images/slider-main/bg2.jpg)">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title">未来生活的支撑 & <br/>
 								长久的资产保护
						</h2>
                	<p class="box-slide-desc">自1989年以来，我们一直为客户提供稳定性和可靠性，帮助他们充满自信地生活，让他们安心。</p>
                	<a href="<?php echo U('Index/firm');?>" class="slider btn btn-primary">了解更多</a>
					</div>
        		</div>
			</div>
		</div><!-- Item 2 end -->

		<div class="item" style="background-image:url(/dashou/Public/Home/images/slider-main/bg4.jpg)">
			<div class="container">
				<div class="box-slider-content">
					<div class="box-slider-text">
						<h2 class="box-slide-title"> 灵活地解决方案 &
							<br /> 您需要的是重中之重
						</h2>
                	<p class="box-slide-desc">自1989年以来，我们一直为客户提供稳定性和可靠性，帮助他们充满自信地生活，让他们安心。</p>
                	<a href="<?php echo U('Index/personal');?>" class="slider btn btn-primary">了解更多</a>
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
						<h2>马上加入我们成为一员!</h2>
					</div>
					<p class="action-btn"><a class="btn btn-primary" href="<?php echo U('Index/joininfo');?>">我要加入</a></p>
				</div>
			</div>
		</div><!--/ Container end -->
    </section><!-- Call to Action end -->


	<section id="ts-features" class="features-area">
		<div class="container">
			<div class="row text-center">
				<h2 class="title">
					We Have Thoughts
					<span class="title-head">经验丰富</span>
				</h2>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
					<div class="ts-service-box">
						<span class="ts-service-icon">
							<i class="fa fa-line-chart"></i>
						</span>
						<div class="ts-service-box-content">
							<h3>具备竞争力的价格</h3>
							<ul>
								<li>获得保险报价</li>
								<li>得到保险</li>
								<li>管理您的保险</li>
								<li>了解保险</li>
								<li>产品与服务</li>
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
							<h3>丰富的经验</h3>
							<ul>
								<li>获得保险报价</li>
								<li>得到保险</li>
								<li>管理您的保险</li>
								<li>了解保险</li>
								<li>产品与服务</li>
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
							<h3>满足您的所有需求</h3>
							<ul>
								<li>获得保险报价</li>
								<li>得到保险</li>
								<li>管理您的保险</li>
								<li>了解保险</li>
								<li>产品与服务</li>
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
					<span class="title-head">选择我们</span>
				</h3>
			</div><!--/ Title row end -->


			<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs col-sm-12 col-xs-12">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-head">
									<i class="fa fa-globe pull-left">&nbsp;</i>
									<span class="tab-text-title">始于1989</span>
								</span>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-users pull-left">&nbsp;</i>
									<span class="tab-text-title">300万用户支持</span>
								</span>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-android pull-left">&nbsp;</i>
									<span class="tab-text-title">灵活的手续和网络支持</span>
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-life-ring pull-left">&nbsp;</i>
									<span class="tab-text-title">安全并稳定</span>
								</span>
						  	</a>
						</li>

						<li>
						  	<a class="animated fadeIn" href="#tab_e" data-toggle="tab">
						  		<span class="tab-head">
									<i class="fa fa-user-secret pull-left">&nbsp;</i>
									<span class="tab-text-title">24小时人工服务</span>
								</span>
						  	</a>
						</li>

					</ul>
					<div class="tab-content col-sm-12 col-xs-12">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<img class="img-responsive pull-right" src="/dashou/Public/Home/images/tab/featured-tab1.jpg" alt="">
				        	<div class="tab-wrapper">
				        		<h3 class="tab-content-title">经验丰富并且体系成熟</h3>
					         <p>大寿保险（集团）公司，是特大型金融保险企业，总部设在北京，世界500强企业、中国品牌500强。公司前身是成立于1949年的原大寿人民保险公司，1996年分设为中保大寿保险有限公司，1999年更名为中国大寿保险公司。2003年，业务范围全面涵盖寿险、财产险、养老保险（企业年金）、资产管理、另类投资、海外业务、电子商务等多个领域，并通过资本运作参股了多家银行、证券公司等其他金融和非金融机构。.</p>
					         <ul class="list-round-arrow">
									<li>2013胡润国有品牌榜，760亿元品牌价值，排名第6</li>
									<li>2012胡润品牌榜，790亿元品牌价值，排名第8</li>
									<li>2011胡润品牌榜，1010亿元品牌价值，排名第6</li>
									<li>2009胡润品牌榜，600亿元品牌价值，排名第5</li>
								</ul>
				        	</div>
				        </div>

				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <img class="img-responsive pull-left" src="/dashou/Public/Home/images/tab/featured-tab2.png" alt="">
				            <h3>大量用户基数体现品牌优势</h3>
								<p>大寿秉持“成己为人 成人达己”的企业文化核心理念，努力推进“创新驱动 综合经营 国际一流”发展战略，增强发展动力、扩大经营布局、服务国家大局，加快转型升级、提质增效，以“建设国际一流金融保险集团”为企业愿景，薪火相传，砥砺奋进。</p>

				        </div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_c">
				            <p class="tab-icon pull-left"><i class="fa fa-android">&nbsp;</i></p>
				            <h3>及时、高效、简易、便捷</h3>
								<p>互联网保险一般在投保时就已经同时录入了投保人的所有资料，这些资料云端存储，不需要再进行线下提供，一旦投保人发生意外，需要赔付的时候，只需在手机软件上提出申请，保险公司客服人员马上远程审核，通过审核即可进行赔付，普通常见的险种一般只需几个小时就能完成整个流程，因此相比传统保险赔付模式，互联网保险的陪护可以说是更好的保障了投保人的权益。</p>

				        	</div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_d">
				            <p><img class="pull-right img-responsive" src="/dashou/Public/Home/images/tab/featured-tab3.png" alt=""></p>
								<h3>强大安全技术保障团队不间断维护</h3>
								<p>强大的技术实力帮助企业全面发现业务漏洞及风险。安应用具有测试效率高、测试人员多、测试效果好、性价比高等优势，保证安全风险可以快速响应和修复，避免造成更大的业务损失。</p>
				        	</div>

				        	<div class="tab-pane animated fadeInLeft" id="tab_e">
				            <p><img class="pull-left img-responsive" src="/dashou/Public/Home/images/tab/featured-tab4.png" alt=""></p>
								<h3>及时长期人性化服务</h3>
								<p>提供技术服务，深知“没有良好的售后服务，不能算一个合格产品”的道理。为了让用户更快捷的解决问题，我们直接让技术团队承担客服工作，接待客户时才能迅速找出根源并加以解决。"售后60秒响应"是我们在2013年提出的新口号，凡是工作时间范围内，我们都会在60秒内响应客户的请求享受优质的售后服务。</p>
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
					<h2>我们提供</h2>
					<p>业务范围全面涵盖寿险、财产险、养老保险（企业年金）、资产管理、另类投资、海外业务、电子商务等多个领域，并通过资本运作参股了多家银行、证券公司等其他金融和非金融机构。</p>

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-pie-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>经济安全保障</h3>
								<p>经济全球化时代一国保持其经济存在和发展所需资源有效供给、经济体系独立稳定运行、整体经济福利不受恶意侵害和非可抗力损害的状态和能力。</p>
							</div>
						</div><!--/ Box 1 end -->

						<div class="col-md-6 service-box"><i class="fa fa-line-chart">&nbsp;</i>
							<div class="service-box-content">
								<h3>储蓄和投资</h3>
								<p>在完全竞争条件下，存在一个均衡利率水平，使得储蓄刚好等于投资。</p>
							</div>
						</div><!--/ Box 2 end -->
					</div><!-- 1st row end -->

					<div class="row">
						<div class="col-md-6 service-box"><i class="fa fa-briefcase">&nbsp;</i>
							<div class="service-box-content">
								<h3>贸易合作保证</h3>
								<p>直接反映在上下游的贸易合同差价中,就上下游的履约义务,要求合作方分别提供担保函、资产抵押或者第三方担保。</p>
							</div>
						</div><!--/ Box 3 end -->

						<div class="col-md-6 service-box"><i class="fa fa-graduation-cap">&nbsp;</i>
							<div class="service-box-content">
								<h3>教育资金</h3>
								<p>配置于教育系统,并在教育系统内部发挥作用的资金。</p>
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
						无与伦比的里程碑区
						<span class="title-head"> 被覆盖的重要性</span>
					</h2>
					<p>自1859年以来，我们一直为客户提供稳定性和可靠性，帮助他们充满自信地生活，让他们高枕无忧，让他们为亲人和他们的遗产实现梦想。
						我们一直提供稳定性和可靠性 自1859年以来，我们的客户帮助他们充满自信地生活，让他们安心，并让他们实现他们的亲人和他们的遗产的梦想。</p>
					<p><a class="btn btn-dark" href="<?php echo U('Index/message');?>">留言咨询</a></p>

				</div><!-- Col end -->

				<div class="col-md-6">
					<div class="facts-wrapper">
						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-umbrella"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">7968</span></h2>
								<h3 class="ts-facts-title">保险条例</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-globe"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">127</span></h2>
								<h3 class="ts-facts-title">遍布国家</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-smile-o"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">1356200</span></h2>
								<h3 class="ts-facts-title">忠实用户</h3>
							</div>
						</div><!-- Col end -->

						<div class="col-md-6 ts-facts">
							<div class="ts-facts-icon">
								<i class="fa fa-street-view"></i>
							</div>
							<div class="ts-facts-content">
								<h2 class="ts-facts-num"><span class="counterUp">423</span></h2>
								<h3 class="ts-facts-title">代理点</h3>
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
						<a href="<?php echo U('Index/newsSingle');?>?id=<?php echo ($new["news_id"]); ?>" class="btn btn-primary">阅读全文</a>
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