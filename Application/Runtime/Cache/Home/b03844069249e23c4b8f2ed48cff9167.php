<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Contact</title>
<link href="/new/Public/fourier/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/new/Public/fourier/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- HTTP 1.1 -->  
<meta http-equiv="pragma" content="no-cache">  
<!-- HTTP 1.0 -->  
<meta http-equiv="cache-control" content="no-cache">  
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/new/Public/fourier/js/jquery-1.11.1.min.js"></script>
<script src="/new/Public/fourier/js/bootstrap.js"></script>
<link href='http://fonts.useso.com/css?family=Damion' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
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
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">造型展<span class="caret"></span></a>
									<ul class="dropdown-menu">
									    <li><a href="gallery1.html">我们自己的造型</a></li>
										<li><a href="gallery2.html">店长打造的造型</a></li>
										<li><a href="gallery3.html">总监打造的造型</a></li>
									</ul>
								</li>
							<li><a href="recent.html">我们的动态</a></li>	
							<li class="active"><a href="contact.html">留言板</a></li>
						</ul>
								  
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
		</div>
	</div>
<!--header-->
			<!--content-->
				<div class="content">
					<div class="contact">
						<div class="container">
							<h2><span>Message Board</span></h2>
							<!-- <div class="google-map col-lg-offset-2" >
							   <iframe src="map.html"  width="600" height="300" frameborder="0" scrolling="no"></iframe>
							</div> -->

							<div></div>
							<!-- <div class="panel panel-default">
							<div class="panel-body">
								
							</div>
								
							</div> -->
									<div class="contact-grids">
							<!-- <div class="col-md-1 contact-right">
							</div> -->
							<div class="col-md-12 contact-left">
								<div class="bs-example" data-example-id="panel-without-body-with-table">
								    <div class="panel panel-default">
								      	<!-- Default panel contents -->
								      	<div class="panel-heading">留言板</div>
								
								      	<!-- Table -->
								      	<table class="table">
								        	<thead>
								          		<tr>
								            		<th align="center" width="10%">用户</th>
								            		<th align="center" width="10%">时间</th>
								            		<th align="center" width="70%">评论</th>
								          		</tr>
								        	</thead>
								        	<tbody>
								        		<!-- thinkphp框架标签 foreach -->
								        		<?php if(is_array($comment_list)): foreach($comment_list as $key=>$vo): ?><tr>
										            	<td><?php echo ($vo["user_name"]); ?></td>
									            		<td><?php echo ($vo["time"]); ?></td>
									            		<td><?php echo ($vo["content"]); ?></td>
									          		</tr><?php endforeach; endif; ?>
								        
								        	</tbody>
								      	</table>
								    </div>
								</div>
							<div class="col-md-1 contact-left">
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="contact-grids">
							<div class="col-md-6 contact-right">
								<form action="#" method="post">
									<h5>名字</h5>
									<input type="text" name="Name" id="name">
									<!-- <h5>邮箱地址</h5>
									<input type="text" name="Email" > -->
									<h5>留言</h5>
									 <textarea name="Message" id="content"></textarea>
									 <input type="submit" value="send" id="btn_submit">
								 </form>
								 <script>
								 	$(document).ready(function(){
								 		$("#btn_submit").click(function(){
								 			var name = $("#name").val();
								 			var content = $("#content").val();
								 			var url = "<?php echo U('index/mkcomment');?>";
								 			$.post(url,{name:name,content:content},function(response){
								 				console.log(response);
								 				if(response.status == 1){
								 					alert('成功');
								 					window.location.reload();
								 				}else{
								 					alert(response.msg);
								 				}
								 			},'json');
								 		})
								 	})
								 </script>
							</div>
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

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