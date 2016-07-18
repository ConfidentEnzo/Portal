<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>最近新菜</title>

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
            <li><a href="forms.html"><i class="fa fa-edit"></i> 添加新菜</a></li>
            <li class="active"><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i>最近新菜</a></li>
               <li ><a href="adduser.html"><i class="fa fa-wrench"></i>新增管理员</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
       
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 退出 <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    
      <div id="page-wrapper">

          <div class="row">
          <div class="col-lg-12">
            <h1>最近新菜 </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> 首页</a></li>
              <li class="active"><i class="fa fa-wrench"></i> 最近新菜</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

<div class="row">

    <div class="col-lg-12 contact-left">
                <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">菜单列表</div>
                
                        <!-- Table -->
                        <table class="table">
                          <thead>
                               <tr>
                                <th align="left" width="5%">序号</th>
                                <th align="left" width="10%">菜名</th>
                                <th align="left" width="30%">图片</th>
                                <th align="left" width="50%">介绍</th>
                                <th align="left" width="5%">选择</th>
                              </tr> 
                          </thead>
                          <tbody>
                            <?php if(is_array($cuisine_list)): foreach($cuisine_list as $key=>$item): ?>菜名：
                              价格：
                              <img src="<?php echo ($item["cuisine_img"]); ?>"/>
                              介绍：<?php echo ($item["cuisine_intro"]); ?>
                            
                                <tr>
                                  <td>01</td>
                                  <td><?php echo ($item["cuisine_name"]); ?></td>
                                  <td><?php echo ($item["cuisine_price"]); ?></td>
                                  <td><img src="<?php echo ($item["cuisine_img"]); ?>" class="img-responsive" alt="picture1"></td>
                                  <td><?php echo ($item["cuisine_intro"]); ?></td>
                                  <td> 
                                    <?php if($item['is_show'] == 1): ?><button type="privilege" class="btn btn-default">主页显示</button>
                                    </else>
                                      <button type="privilege" class="btn btn-default" style="color:red;">主页不显示</button><?php endif; ?>
                                    <br/>
                                    <button type="delete" class="btn btn-default">删除</button>
                                  </td>
                                </tr><?php endforeach; endif; ?>
                              <!-- <tr>
                                <td>02</td>
                                <td>双椒烧肉</td>
                                <td><img src="/yingsen/Public/admin/images/g5.jpg" class="img-responsive" alt="picture2"></td>
                                <td>将细嫩的鸡肉和青椒，红椒一起混炒，在再淋上特制的酱油，一定会令你食指大动。</td>
                                <td> <button type="privilege" class="btn btn-default">主页显示</button><br/>
                                <button type="delete" class="btn btn-default">删除</button></td>
                              </tr>
                              <tr>
                                <td>03</td>
                                <td>火腿芝士焗饭</td>
                                <td><img src="/yingsen/Public/admin/images/g2.jpg" class="img-responsive" alt="picture3"></td>
                                <td>用从国外进口的最优质的火腿和优质芝士混合，再拌上新鲜时蔬，会使你想一尝再尝。</td>
                                <td> <button type="privilege" class="btn btn-default">主页显示</button><br/>
                                <button type="delete" class="btn btn-default">删除</button></td>
                              </tr>
                               <tr>
                                <td>04</td>
                                <td>啤酒杯虾</td>
                                <td><img src="/yingsen/Public/admin/images/g4.jpg" class="img-responsive" alt="picture3"></td>
                                <td>将上好的北极虾用啤酒腌制放上24个小时，再通过杯子盛装，就形成了一道美味的菜肴。</td>
                                <td> <button type="privilege" class="btn btn-default">主页显示</button><br/>
                                <button type="delete" class="btn btn-default">删除</button></td>
                              </tr> -->
                              
                          </tbody>
                        </table>
                    </div>
                    </div>
                
              <div class="col-lg-5 contact-left">
              </div>
              <div class="clearfix"></div>
            </div>

  
</div>  <!-- row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="/yingsen/Public/admin/js/jquery-1.10.2.js"></script>
    <script src="/yingsen/Public/admin/js/bootstrap.js"></script>

  </body>
</html>