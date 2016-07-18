<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title>
<link href="/yingsen/Public/fourier/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/yingsen/Public/fourier/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/yingsen/Public/fourier/js/jquery-1.11.1.min.js"></script>
<script src="/yingsen/Public/fourier/js/bootstrap.js"></script>
<link href='http://fonts.useso.com/css?family=Damion' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--script-->
	<script src="/yingsen/Public/fourier/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="/yingsen/Public/fourier/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files-->
	<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
	</script>
<!--script-->

</head>
<body>
<!--header-->
	<div class="header head-top">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>				  
						<div class="navbar-brand">
				
							<h2><a href="<?php echo U('admin/index');?>" style="color:#ffffff">北邮有间餐厅</a></h2>
						</div>
					</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.html">主页 <span class="sr-only">(current)</span></a></li>
							<li><a href="about.html">关于我们</a></li>
							<li><a href="index.html">美食</a></li>
								<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">美食展 <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="gallery1.html">美食展 1</a></li>
										<li><a href="gallery2.html">美食展 2</a></li>
										<li><a href="gallery3.html">美食展 3</a></li>
									</ul>
								</li>
							<li><a href="recent.html">餐厅动态</a></li>	
							<li><a href="contact.html">留言板</a></li>
						</ul>
								  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
		</div>
	</div>
<!--header-->
			<!--content-->
				<div class="content">
				<!-- gallery -->
					<div class="gallery">
						<div class="container">
							<h2><span>Photo</span> Gallery</h2>
							<div class="gallery-grids">
								<div class="gallery-grid">
									<a href="/yingsen/Public/fourier/images/xican10.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican10.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican9.png" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican9.png" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican8.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grid">
									<a href="/yingsen/Public/fourier/images/xican7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican7.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican6.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican6.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican5.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican4.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grid">
									<a href="/yingsen/Public/fourier/images/xican3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican3.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/xican2.png" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/xican2.png" alt=" " class="img-responsive" />
									</a>
									<a href="/yingsen/Public/fourier/images/niupai1.jpeg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/yingsen/Public/fourier/images/niupai1.jpeg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				<!-- //gallery -->
					<div class="footer-section">
						<div class="container">
							<div class="footer-grids">
								<div class="col-md-3 footer-grid">
									<h4>产品</h4>
									<ul>
										<li>牛排 </li>
										<li>披萨</li>
										<li>汉堡 & 薯条</li>
										<li>沙拉</li>
										<li>海鲜</li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>开店时间</h4>
									<ul>
										<li>周一: 关闭</li>
										<li>周二-周五 : 10am - 11pm</li>
										<li>周六-周日n : 9am - 11pm</li>
										<li>公共假日 : 10am - 8pm</li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>联系方式</h4>
									<ul>
										<li><a href="#">QQ</a></li>
										<li><a href="#">微信</a></li>
										<li><a href="#">美团</a></li>
										<li><a href="#">大众点评</a></li>
										<li><a href="#">百度外卖</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>地址</h4>
									<p>北京市</p>
									<p>海淀区，西土城路，10号</p>
									<p>Telephone : +1 234 567 890</p>
									<p>FAX : + 1 234 567 890</p>
									<p>E-mail : <a href="mailto:example@mail.com"> example@mail.com</a></p>

								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
			<!--footer-->	

				</div>
				<!--copy-->
					<div class="copy-section">
						<div class="container">
							<p>制作人:曾颖森  柏沫羽  李禹锋  江宇鸥</a></p>
						</div>
					</div>
			<!--footer-->	

				</div>
				
				<!--copy-->
</body>
</html>