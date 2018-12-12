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
	<script src="/dashou/Public/Home/js/info.js"></script>
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
	        				<h1 class="banner-title">Career</h1>
	        			</div>
			        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li>Company Pages</li>
			            <li><a href="#"> Career List</a></li>
		          	</ul>
	        		</div>
	        	</div>
       	</div>
    	</div><!-- Subpage title end -->
	</div><!-- Banner area end --> 


	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row text-center">
				<h2 class="title">
					You Have Dreams
					<span class="title-head">We Have Opportunities</span>
				</h2>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4">
				   <div class="ts-service-wrapper">
				      <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/dashou/Public/Home/images/pages/career1.jpg" alt="">
				         </span>
				      </div>
				      <div class="ts-service-info">
				         <h3>Internships &amp; Early Career</h3>
				         <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like you. Our workplace has been recognized time and again.</p>
				      </div>
				   </div>
				</div><!-- Col 1 end -->

				<div class="col-md-4">
				   <div class="ts-service-wrapper">
				      <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/dashou/Public/Home/images/pages/career2.jpg" alt="">
				         </span>
				      </div>
				      <div class="ts-service-info">
				         <h3>Working Professionals</h3>
				         <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like you. Our workplace has been recognized time and again.</p>
				      </div>
				   </div>
				</div><!-- Col 2 end -->

				<div class="col-md-4">
				   <div class="ts-service-wrapper">
				      <div class="ts-service-image-wrapper">
				         <span class="ts-service-image">
				         	<img class="img-responsive" src="/dashou/Public/Home/images/pages/career3.jpg" alt="">
				         </span>
				      </div>
				      <div class="ts-service-info">
				         <h3>Recruiting Is Key</h3>
				         <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like you. Our workplace has been recognized time and again.</p>
				      </div>
				   </div>
				</div><!-- Col 3 end -->

			</div><!-- Content row 1 end -->

			<div class="gap-30"></div>


			<div  class="row">
				<h3>请选择所在省市（区）: </h3>
				<form action="<?php echo U('searchAgent');?>" method="post">
				<select style="font-size:18px;display: inline;width: 220px;margin-right: 30px" class="form-control" name="province" id="province" onchange="getCity()">
                        <option value="">省份</option>
                         <!-- 利用js把省份添加到下拉列表里-->
                           <script type="text/javascript"> 
                            for(var i=0;i<provinceArr.length;i++)    
                            {
                                document.write("<option name='province' value='"+provinceArr[i]+"' >"+provinceArr[i]+"</option>");
                                
                            }
                        </script>
				</select>
				<select style="font-size:18px;display: inline;width: 270px" class="form-control" name="city" id="city">
                        <option name='city' value="">市（区）</option>
                       
				</select>
				<div style="float: right;"><input class="btn btn-primary" type="submit" value="查询"></div>
				</form>
			</div>

			<div class="gap-30"></div>



			<div class="row">
				<h3>营业点 : </h3>
				<table class="table table-striped career-table">
				   <thead>
				      <tr>
				         <th>名称</th>
				         <th>地址</th>
						 <th>联系电话</th>
						 <th>负责人</th>
				      </tr>
				   </thead>
				   <tbody>

					<?php if(is_array($agent_list)): foreach($agent_list as $key=>$agent): ?><tr>
				         <th scope="row"><a href="#"><?php echo ($agent["agent_name"]); ?></a></th>
				         <td><?php echo ($agent["agent_address"]); ?></td>
				         <td><?php echo ($agent["agent_phone"]); ?></td>
				         <td><?php echo ($agent["agent_master"]); ?></td>
					  </tr><?php endforeach; endif; ?>

				     
				   </tbody>
				</table>
			</div><!-- Content row 2 end -->


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


	<script>
			//当省份的选择发生变化时调用 该方法   将市县加载到下拉选择框
		  function getCity()
	  {
		  //1.获取省份选择框的对象
		  var provincesobj=document.getElementById("province");
		  //2.获取市县选择框的对象
		  var cityobj=document.getElementById("city");
		  //3.获取被选择的省份的索引
		  var index=provincesobj.selectedIndex;
		  
		  //alert(provincesobj[index].value+","+provincesobj[index].text);
		  ////4.通过省份的索引获取它的value值，value值也是它在数组的索引值
		  var value=provincesobj[index].index-1;
		  
		  //5.获取对应省份的市县数组
		  var cityName=cityArr[value];
		  //6.将下拉框清楚索引为0之后的，只保留第一个
		  cityobj.length=1;
		  //通过循环遍历市县元素给下拉框赋值
		  for(var i=1;i<cityArr[value].length;i++)
		  {
			  cityobj.options[cityobj.options.length]=new Option(cityName[i],cityName[i]);
		  }
		  
	  }
   
  </script>
  
	
	</div><!-- Body inner end -->
</body>
</html>