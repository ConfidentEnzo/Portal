<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
							<li class="active"><a href="index.html">主页 <span class="sr-only">(current)</span></a></li>
							<li><a href="about.html">关于我们</a></li>
							<li><a href="#menu" class="scroll">潮流造型</a></li>
								<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">潮流造型 <span class="caret"></span></a>
									<ul class="dropdown-menu">
		                                <li><a href="gallery1.html">我们自己的造型</a></li>
										<li><a href="gallery2.html">店长打造的造型</a></li>
										<li><a href="gallery3.html">总监打造的造型</a></li>
									</ul>
								</li>
							<!--<li><a href="codes.html">Codes</a></li>-->
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
				
					<div class="last-post">
						<div class="container">
											<h3><span>最近</span> 新活动</h3>
							<div class="last-grids">
								<?php if(is_array($cuisine_list)): foreach($cuisine_list as $key=>$item): ?><div class="col-md-3 last-grid">
										<div class="last1">
											 <a href="#" class="mask"><img src="/new/Public/uploads/<?php echo ($item["cuisine_img"]); ?>" alt="image" class="img-responsive zoom-img"></a>
											<h4><?php echo ($item["cuisine_name"]); ?></h4>
											<p><?php echo ($item["cuisine_intro"]); ?></p>
										</div>
									</div><?php endforeach; endif; ?>

								<!-- <div class="col-md-3 last-grid">
									<div class="last1">
										 <a href="#" class="mask"><img src="/new/Public/fourier/images/a3.jpg" alt="image" class="img-responsive zoom-img"></a>
										<h4>赠送！染发两人同行一人免单</h4>
										<p>创意染发体验活动，两人同行，只买一单！只需688，活动期间包含退色和剪发！约上你的闺蜜行动起来！</p>
									</div>
								</div>	
								<div class="col-md-3 last-grid">
									<div class="last1">
										<a href="#" class="mask"><img src="/new/Public/fourier/images/a2.jpg" alt="image" class="img-responsive zoom-img"></a>
										<h4>染发超值送!</h4>
										<p>超值染发套餐，368元可任选颜色，不分长短发，包含剪发造型！另赠送价值368元深层护理</p>
									</div>
								</div>	
								<div class="col-md-3 last-grid">
									<div class="last1">
										<a href="#" class="mask"><img src="/new/Public/fourier/images/a1.jpg" alt="image" class="img-responsive zoom-img"></a>
										<h4>剪发项目赠送护理加造型</h4>
										<p>任意剪发项目加58元即可赠送价值168元深层护理加50元精美造型！（总监剪发98元，店长剪发168元）</p>
									</div>
								</div>	
								<div class="col-md-3 last-grid">
									<div class="last1">
										<a href="#" class="mask"><img src="/new/Public/fourier/images/a4.jpg" alt="image" class="img-responsive zoom-img"></a>
										<h4>烫发体验活动</h4>
										<p>资深设计师烫发活动体验中，含烫前护理，营养烫发，冷烫热汤均可。</p>
									</div>
								</div>	 -->
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
						<!--post-->
						<!--news-->
							
						<!--news-->
						<!--footer-->
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
				<!--copy-->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-info">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
						<div class="modal-body">
							<div class="compose-grids">
									<div class="payment-online-form-left">
											<form>
												<h4><span class="shipping"> </span>Shipping Details</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<li><input class="text-box-dark" type="text" value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}"></li>
													
												</ul>
												<div class="clearfix"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clearfix"></div>
											<ul class="payment-type">
												<li><span class="col_checkbox">
													<input id="3" class="css-checkbox1" type="checkbox">
													<label for="3" class="css-label1"></label>
													<a class="visa" href="#"></a>
													</span>												
												</li>
												<li>
													<span class="col_checkbox">
														<input id="4" class="css-checkbox2" type="checkbox">
														<label for="4" class="css-label2"></label>
														<a class="paypal" href="#"></a>
													</span>
												</li>
											</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
												
												</ul>

									  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-success">Process order</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>