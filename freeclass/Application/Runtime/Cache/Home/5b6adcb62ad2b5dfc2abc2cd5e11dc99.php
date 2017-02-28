<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<title>空课统计</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/freeclass/Public/login/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/freeclass/Public/login/js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="/freeclass/Public/login/js/move-top.js"></script>
<script type="text/javascript" src="/freeclass/Public/login/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
		});
	});
</script>
<!---- start-smoth-scrolling---->
 <!-- Custom Theme files -->
<link href="/freeclass/Public/login/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' rel='stylesheet' type='text/css'>
<!----webfonts---->
	<!----- start-Share-instantly-slider---->
					 <!-- Prettify -->
						<link href="/freeclass/Public/login/css/owl.carousel.css" rel="stylesheet">
					    <script src="/freeclass/Public/login/js/owl.carousel.js"></script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo , #owl-demo1").owlCarousel({
						        items : 1,
						        lazyLoad : true,
						        autoPlay : true,
						      });
						    });
					    </script>
					    <script>
						    $(document).ready(function() {
						      $("#owl-demo3").owlCarousel({
						        items : 4,
						        lazyLoad : true,
						        autoPlay : true,
						        navigation: false,
						        pagination: false,
						      });
						    });
					    </script>
					<!----- //End-Share-instantly-slider---->
             
				<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
<script src="/freeclass/Public/login/js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>
</head>
<body>
    <div class="header">
     <div class="container">
		 <div class="logo">
			<a href="index.html"><img src="/freeclass/Public/login/images/logo.gif" class="img-responsive" alt=""/></a>
		 </div>
		             <nav class="top-nav">
						<ul class="top-nav">
							<li class="active"><a href="#home" class="scroll">主页 <span> </span></a></li>
							<li class="page-scroll"><a href="#notice" class="scroll">公告<span> </span></a></li>
							<li class="page-scroll"><a href="#download" class="scroll">下载<span> </span></a></li>
							<li class="page-scroll"><a href="<?php echo U('Index/login');?>">登录<span> </span></a></li>
						</ul>
						<a href="#" id="pull"><img src="/freeclass/Public/login/images/nav-icon.png" title="menu" /></a>
					</nav>			
	                <div class="clearfix"></div>
	  </div>
   </div>
   <div class="slider" id="home">
  	<div class="slider_container">
  		<div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 1;"> 
				   	 <div class="banner-wrap">
				   		 <div class="slider-left">
						    <h1>Welcome to<br>FreeClass</h1>
							<p class="top">FreeClass is developmented by LongLi, lasted for a month, it is mainly used for the teacher or student organization statistics student empty class.</p>
						 </div>
					   	 <div class="slider-right">
							 <img src="/freeclass/Public/login/images/one.png" style="box-shadow:10px 10px 50px #111;" alt=""/>
						 </div>
						 <div class="clearfix"> </div>
					 </div>
					</article>
				</div>
              </div>    	      
           </div>
      </div>
      <div class="main">
      	<div class="content-top" id="download">
		<div class="container">
				<h2 class="m_1">文件下载</h2>
      		</div>
      			<div class="row feature">
					<div class="col-md-1 feature_img">
					</div>
					<div class="col-md-6 feature_img">
						<img src="/freeclass/Public/login/images/download.jpg" class="img-responsive" alt=""/>
					</div>
      				<div class="col-md-4 feature_top">
						<ul style="list-style: none;font-family: '微软雅黑 Light';">
							<li><a href="/freeclass/Public/download/student.docx">空课统计使用说明（学生版）</a></li>
							<li><a href="/freeclass/Public/download/teacher.docx">空课统计使用说明（教师版）</a></li>
						</ul>
      				</div>
      			</div>
			</div>
      	</div>
      	<!----- start-gallery----->
		<div id="notice" class="work">
			<div class="container">
      			<h2 class="m_1">通知公告</h2>
				<div class="col-md-1 feature_img">
				</div>
      			<div class="col-md-6 feature_top">
      					<p class="h3">选课期间本系统暂停使用</p>
      				</div>
				<div class="col-md-4 feature_img">
					<img src="/freeclass/Public/login/images/notice.gif" class="img-responsive" alt=""/>
				</div>
      		</div>
		</div>
	  </div>
	   <div class="footer" id="contact">
	   	<div class="container">
	   	   <div class="row footer-top">
	   		<div class="col-md-3 footer_grid">
	   			<h3 class="m_13">关于作者</h3>
	   			<p class="m_14">WingStudio 龙鲤</p>
	   			<div class="address">
						<p>学院：信息工程学院</p>
						<p>专业：计算机科学与技术</p>
						<p>班级：14计科2班</p>
				</div>
	   		</div>
	   		<div class="col-md-3 footer_grid">
	   			<ul class="f_grid1">
					<li><i class="f-tw"> </i><div class="extra-wrap">
					<p>赞助商</p>
					</div>
					<div class="clearfix"> </div></li>
				</ul>
				<p class="m_14">此广告位长期招商</p>
	   		</div>
	   		<div class="col-md-3 footer_grid">
	   			<ul class="f_grid1">
					<li><i class="f-link"> </i><div class="extra-wrap">
					<p>快速导航</p>
					</div>
					<div class="clearfix"> </div></li>
				</ul>
				<div class="footer_lists">
					<ul class="list">
					   <li><a href="#home">主页</a></li>
					   <li><a href="#notice">公告</a></li>
					   <li><a href="#download">文件下载</a></li>
					   <li><a href="<?php echo U('Index/login');?>">登录</a></li>
					</ul>
				    <ul class="list1">
					   <li><a href="http://www.sicau.edu.cn">四川农业大学</a></li>
					   <li><a href="http://jiaowu.sicau.edu.cn">教务处</a></li>
					   <li><a href="http://xxgc.sicau.edu.cn/">信息工程学院</a></li>
					   <li><a href="https://www.wingstudio.org/">WingStudio</a></li>
				    </ul>
				    <div class="clearfix"> </div>
				</div>
	   		</div>
	   		<div class="col-md-3 footer_grid">
	   			<ul class="f_grid1">
					<li><i class="f-msg"> </i><div class="extra-wrap">
					<p>联系我们</p>
					</div>
					<div class="clearfix"> </div></li>
					<div class="address">
						<p>地点：十教B308</p>
						<p>Q&nbsp; Q：2675290957</p>
						<p>email：everydaysmile1013@foxmail.com</p>
				</div>
				</ul>
				
	   		 </div>
	   		</div>
	   		<div class="footer_bottom">
		   		<div class="copy">
			        <p>Copyright &copy; 四川农业大学信息工程学院&nbsp;<a target="_blank" href="https://www.wingstudio.org/">Wing Studio工作室</a></p>
			    </div>
		       <div class="clearfix"> </div>
		    </div>
		    <script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
		    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">top </span></a>
	   	</div>
	   </div>
</body>
</html>