<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>添加新菜</title>

    <!-- Bootstrap core CSS -->
    <link href="/yingsen/Public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/yingsen/Public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/yingsen/Public/admin/font-awesome/css/font-awesome.min.css">
  </head>

  <body>

   <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">北邮有间餐厅</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li ><a href="index.html"><i class="fa fa-dashboard"></i> 管理员信息</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> 评论管理</a></li>
            <li class="active"><a href="forms.html"><i class="fa fa-edit"></i> 添加新菜</a></li>

            <li><a href="cuisine.html"><i class="fa fa-wrench"></i>最近新菜</a></li>

               <li ><a href="adduser.html"><i class="fa fa-wrench"></i>新增管理员</a></li>

          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
       
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 退出 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                
                <li><a href="<?php echo U('index/logout');?>"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>添加新菜 </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> 首页</a></li>
              <li class="active"><i class="fa fa-edit"></i> 添加新菜</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form target="xx" role="form" action="<?php echo U('cuisine/addcuisine');?>" enctype="multipart/form-data" method="POST">

              <div class="form-group">
                <label>菜名</label>
                <input class="form-control" name="name">
                <p class="help-block"></p>
              </div>

              <div class="form-group">
                <label>上传图片</label>
                <input type="file" name="img_file">
              </div>

              <div class="form-group">
                <label>输入介绍</label>
                <textarea class="form-control" placeholder="please input content" rows="10" name="intro"></textarea>
              </div>

             <iframe name="xx">
               
             </iframe>

<!--               <div class="form-group">
                <label>推荐菜单序号</label>
                <select class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                </select>
              </div>
 -->


              <button type="submit" class="btn btn-default">确认上传</button>
              <!-- <button type="reset" class="btn btn-default">重置</button>   -->

            </form>

          </div>
          <div class="col-lg-6">
         
         <!--  <p>内容</p> -->

           </div>

        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="/yingsen/Public/admin/js/jquery-1.10.2.js"></script>
    <script src="/yingsen/Public/admin/js/bootstrap.js"></script>

  </body>
</html>