<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Wopop</title>
<link href="/new/Public/login/Wopop_files/style_log.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/new/Public/login/Wopop_files/style.css">
<link rel="stylesheet" type="text/css" href="/new/Public/login/Wopop_files/userpanel.css">
<link rel="stylesheet" type="text/css" href="/new/Public/login/Wopop_files/jquery.ui.all.css">
<script type="text/javascript" src="/new/Public/assets/js/jquery.min.js"></script>
</head>

<body class="login" mycollectionplug="bind">
<div class="login_m">
<p>
  <br/>
  <br/>
</p>
<!-- <div class="login_logo"><img src="/new/Public/login/Wopop_files/logo.png" width="196" height="46"></div> -->
<div class="login_boder">

<div class="login_padding" id="login_model">

  <h2>USERNAME</h2>
  <label>
    <input type="text" id="username" class="txt_input txt_input2" onfocus="if (value ==&#39;Your name&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;Your name&#39;}" value="Your name">
  </label>
  <h2>PASSWORD</h2>
  <label>
    <input type="password" name="textfield2" id="userpwd" class="txt_input" onfocus="if (value ==&#39;******&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;******&#39;}" value="******">
  </label>
 
 

 
  <p class="forgot"><a id="iforget" href="javascript:void(0);">Forgot your password?</a></p>
  <div class="rem_sub">
  <div class="rem_sub_l">
  <input type="checkbox" name="checkbox" id="save_me">
   <label for="checkbox">Remember me</label>
   </div>
    <label>
      <input class="sub_button" name="button" id="button" value="SIGN-IN" style="opacity: 0.7;">
    </label>
  </div>
</div>
<script type="text/javascript">

	$("#button").click(function(){
		var username = $("#username").val();
		var userpwd = $("#userpwd").val();
		var url = "<?php echo U('index/do_login');?>";
		$.post(url,
			{
				username:username,
				password:userpwd
			},function(response){
        if(response.status == 1){
          alert(response.msg);
          window.location.href="<?php echo U('admin/index');?>"
        }else{
          alert(response.msg);
        }
				console.log(response);
		},'json');

	});

</script>

<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>

<div id="forget_model" class="login_padding" style="display:none">
<br>

   <h1>Forgot password</h1>
   <br>
   <div class="forget_model_h2">(Please enter your registered email below and the system will automatically reset users’ password and send it to user’s registered email address.)</div>
    <label>
    <input type="text" id="usrmail" class="txt_input txt_input2">
   </label>

 
  <div class="rem_sub">
  <div class="rem_sub_l">
   </div>
    <label>
     <input type="submit" class="sub_buttons" name="button" id="Retrievenow" value="Retrieve now" style="opacity: 0.7;">
     　　　
     <input type="submit" class="sub_button" name="button" id="denglou" value="Return" style="opacity: 0.7;">　　
    
    </label>
  </div>
</div>






<!--login_padding  Sign up end-->
</div><!--login_boder end-->
</div><!--login_m end-->
 <br> <br>


</body></html>