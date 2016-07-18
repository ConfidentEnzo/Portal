<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title>
<link href="/new/Public/fourier/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/new/Public/fourier/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/new/Public/fourier/js/jquery-1.11.1.min.js"></script>
<script src="/new/Public/fourier/js/bootstrap.js"></script>
<link href='http://fonts.useso.com/css?family=Damion' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<!--script-->
	<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
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
					
							<h2><a href="<?php echo U('admin/index');?>" style="color:#ffffff">Neo-Image</a></h2>
						</div>
					</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a href="index.html">主页 <span class="sr-only">(current)</span></a></li>
							<li><a href="about.html">关于我们</a></li>
							<li><a href="index.html">潮流造型</a></li>
								<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">潮流造型<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="gallery1.html">我们自己的造型</a></li>
										<li><a href="gallery2.html">店长打造的造型</a></li>
										<li><a href="gallery3.html">总监打造的造型</a></li>
									</ul>
								</li>
							<li><a href="recent.html">沙龙动态</a></li>	
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
									<a href="/new/Public/fourier/images/w1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/g1.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/g2.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w3.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/g3.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grid">
									<a href="images/w4.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w4.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w5.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w5.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w1.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w1.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w7.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w7.jpg" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grid">
									<a href="/new/Public/fourier/images/w8.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w8.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w9.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w9.jpg" alt=" " class="img-responsive" />
									</a>
									<a href="/new/Public/fourier/images/w2.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="/new/Public/fourier/images/w2.jpg" alt=" " class="img-responsive" />
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
										<li>洗发 </li>
										<li>烫发</li>
										<li>染发</li>
										<li>护理</li>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>开店时间</h4>
									<ul>
										<li>周一-周二: 关闭</li>
										<li>周三-周五 : 1pm - 11pm</li>
										<li>周六-周日: 8am-11pm</li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>联系方式</h4>
									<ul>
										<li><a href="#">店长QQ</a></li>
										<li><a href="#">店长微信</a></li>
										<li><a href="#">美团</a></li>
										<li><a href="#">大众点评</a></li>
									</ul>
								</div>
								<div class="col-md-3 footer-grid">
									<h4>地址</h4>
									<p>北京市</p>
									<p>海淀区，西土城路，10号，北京邮电大学</p>
									<p>Telephone :18810897275</p>
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
							<p>制作人:胡熙雨、王晶、凌健雯、刘健</a></p>
						</div>
					</div>
			<!--footer-->	

				</div>
				
				<!--copy-->
</body>
</html>