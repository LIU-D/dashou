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
                            <a href="<?php echo U('Index/login');?>">点此 登录</a>
                        </div>
    
                    </div><!--/ Col end -->
                </div><!--/ Row end -->
            </div><!--/ Container end -->
        </nav><!--/ Navigation end -->



























	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/ini.isotope.js"></script>
	<!-- Google Map API Key Source -->
	<!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
	<!-- For Google Map -->
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
	<!--<script type="text/javascript" src="js/gmap3.min.js"></script>-->
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>
</html>