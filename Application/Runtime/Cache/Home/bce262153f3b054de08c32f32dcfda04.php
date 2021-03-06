<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
   <title>个人客户中心  -  大寿保险公司</title>


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

					   <li class="dropdown  active">
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
						 </li>
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

	<div id="banner-area" class="banner-area" style="background-image:url(/dashou/Public/Home/images/banner/banner8.jpg)">
		<!-- Subpage title start -->
		<div class="banner-text text-center">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
									<h1 class="banner-title">个人客户中心</h1>
	        			</div>
			        	<ul class="breadcrumb">
									<li><a href="<?php echo U('Index/index');?>">首页</a></li>
									<li>服务中心</li>
			            <li><a href="<?php echo U('Index/personalService');?>">个人客户中心</a></li>
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

					<h3 class="page-title">获取帮助</h2>
						<p>对于个人客户在办理业务的过程中经常会遇见的一些问题做出如下解答。</p>
					<div class="gap-30">&nbsp;</div>

					<h3>流程 </h3>

					<div class="panel-group" id="accordionA">
	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseOne">
									通过代理人购买寿险产品的流程是怎样的？</a>
			                </h4>
		                </div>
		                <div id="collapseOne" class="panel-collapse collapse in">
		                  	<div class="panel-body">
		                    	<ul>
														<li>联系销售人员：通过我公司网站、客服电话查找当地销售人员，并取得联系，我们有几十万名销售人员，协助您办理购买手续。</li>
														<li>填写投保单：购买保险的过程是一个签订合同的过程，您提供真实、详尽的相关信息是合同有效的关键，同时也是我们为您提供服务的基础，请您仔细填写投保单，投保单一定要亲笔签名。</li>
														<li>交纳首期保费：交纳首期暂交保险费，您可以选择以下几种交费方式：签署银行转账授权书进行银行转账交费；前往我公司柜面交纳首期暂交保险费；由我公司销售人员收取保
															险合同单次金额1000元以内的首期暂交保险费（我公司大部分城市地区已取消销售人员收取首期暂交保险费的方式）。如果您前往我公司柜面交纳保费或者通过销售人员交纳保费，我们会向您出具公司统一的收款收据。</li>
														<li>公司审核：我们将审核您的投保资料，根据情况，我们可能需要对您进行生存调查或健康体检；您的资料审核通过后，我们将为您缮制保险合同。</li>
														<li>合同、发票送达：我们会把保险合同和保险费发票送达给您，并收回收款收据，请您在保险合同送达回执上签字，我们会收回该回执。</li>
													</ul>
												</div>
		                </div>
	              	</div><!--/ Panel 1 end-->

	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseTwo">企业投保的流程是怎样的?</a>
			            	</h4>
		                </div>
		                <div id="collapseTwo" class="panel-collapse collapse">
		                  <div class="panel-body">
												<ul>
												 <li>我们会为您进行个性化的保险计划设计。</li>
												 <li>请您仔细填写投保单、投保交费清单及可能涉及的相关问卷。</li>
												 <li>我们将审核您的投保申请资料。</li>
												 <li>您的资料审核通过后，您需要交纳首期保险费。</li>
												 <li>我们会为您缮制保险合同。</li>
												 <li>我们会把保险合同送达给您，请您签收保险合同。</li>
											 </ul>

										  </div>
		                </div>
	              	</div><!--/ Panel 2 end-->

	              	<div class="panel panel-default">
		               <div class="panel-heading">
			                <h4 class="panel-title">
			                <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree">寿险理赔的流程是怎样的? </a>
			            	</h4>
		               </div>
		               <div id="collapseThree" class="panel-collapse collapse">
		                  <div class="panel-body">
												<ul>
 												 <li>发生保险事故后，请您及时通过以下方式报案：1.拨打我公司客服电话； 2.直接到当地服务中心； 3.通过销售人员。</li>
 												 <li>请您按照《理赔应备资料》提示，携带相关材料到当地服务中心申请理赔。 我公司将第一时间审核您递交的申请，如材 料不全，我公司将通知您补交相关材料。</li>
 												 <li>若事故属于保单载明的保险责任并且不属于免责条款以及特约中约定的事项，我公司会通过电话、短信或信函等方式通知 权益人领款或将保险金转账到您指定的银行账户中。</li>
 												 <li>若事故不属于保单载明的保险责任或属于免责条款以及特约中载明的事项，我公司会在核定拒付后3个工作日内，向您发送 《拒绝给付保险金通知书》。</li>
 											 </ul>
											</div>
		               </div>
           			</div><!--/ Panel 3 end-->



        			</div><!-- Accordion end -->

        			<div class="gap-40"></div>

        			<h3>服务</h3>

					<div class="panel-group" id="accordionB">
	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseA">寿险新单如何缴费？
									</a>
			                </h4>
		                </div>
		                <div id="collapseA" class="panel-collapse collapse in">
		                  	<div class="panel-body">
													<ul>
														<li>填写投保单及《保险费自动转账付款授权书》：交费之前请您仔细填写投保单及《保险费自动转账付款授权书》，投保单一定要亲笔签名。</li>
														<li>银行转帐划款：我们将通过《保险费自动转账付款授权书》中的银行账户自动转账划款。</li>
														<li>通知收费信息：划款成功后，我们将根据您选择的通知方式（如手机短信等）告知收费成功信息。</li>
														<li>送达合同及发票：我们会把保险合同和保险费发票送达给您，请您在保险合同送达回执上签字，我们会收回该回执。</li>
													</ul>
												</div>
		                </div>
	              	</div><!--/ Panel 1 end-->

	              	<div class="panel panel-default">
		                <div class="panel-heading">
			                <h4 class="panel-title">
			                	<a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseB"> 投保人、被保险人信息如何变更 ? 	</a>
			            	</h4>
		                </div>
		                <div id="collapseB" class="panel-collapse collapse">
		                  <div class="panel-body">
												<ul>
												 <li>投保人信息变更：双方认定的投保单位联系人携带身份证件，提交《保险合同变更申请书（团体/汇交件）》——公司审核确认——公司出具批单，交客户存执。</li>
												 <li>被保险人信息变更：双方认定的投保单位联系人携带身份证件、拟变更被保险人的身份证复印件等，提交申请书及相应人员变更清单——公司审核确认——公司出具批单及保全变动清单，交客户存执。</li>
											 </ul>
											</div>
		                </div>
	              	</div><!--/ Panel 2 end-->

	              	<div class="panel panel-default">
		               <div class="panel-heading">
			                <h4 class="panel-title">
			                <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseC">介绍一下账户管理服务? </a>
			            	</h4>
		               </div>
		               <div id="collapseC" class="panel-collapse collapse">
		                  <div class="panel-body">
		                    <p>国寿养老险公司以专业的账户管理能力为核心，以完善的账户管理系统为平台，以科学的监管机制为基础，以严密的风险控制为保障，从企业年金账户管理安全、准确、高效管理出发，为客户提供全面、准确、及时的企业年金账户管理服务。
国寿养老险公司可以根据企业需求设计账户管理结构，提供包括申请信息校验、账户建立、日常管理、收益分配、待遇计算、报告管理、信息查询、档案管理等一系列账户管理服务，全面满足企业个性化、多样化、差异化需求。</p>
		                  </div>
		               </div>
           			</div><!--/ Panel 3 end-->

        			</div><!-- Accordion end -->


				</div><!-- Content Col end -->

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="widget-title">Contact us</h3>

							<div class="contact-info-box">
								<i class="fa fa-map-marker">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>总部</h4>
									<p>后市万黎水内路 A1230， 大寿大厦 北京, 中国.</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-phone">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>客服中心</h4>
									<p>中国: (+86) 847-291-4353</p>
									<p>其他: (+86) 237-2325-4855</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-envelope">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>邮件地址</h4>
									<p>support@dashou.com</p>
									<p>info@dashou.com</p>
								</div>
							</div>

						</div><!-- Widget end -->

						<div class="widget box solid">
							<div class="testimonial-classic">
								<p class="testimonial-classic-text">为了让用户更快捷的解决问题，我们直接让技术团队承担客服工作，
									接待客户时才能迅速找出根源并加以解决。"售后60秒响应"是我们在2013年提出的新口号，凡是工作时间范围内，我们都会在60秒内响应客户的请求享受优质的售后服务。</p>
									<img src="/dashou/Public/Home/images/clients/testimonial1.png" alt="testimonial">
								<div class="testimonial-classic-author">
									<h3 class="name">客服人员</h3>
									<h4 class="desg">&nbsp;</h4>
								</div>
							</div>
						</div><!-- Widget end -->

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