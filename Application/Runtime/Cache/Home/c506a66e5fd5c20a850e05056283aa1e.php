<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>后台管理界面</title>

    <!-- Bootstrap core CSS -->
    <link href="/new/Public/admin/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/new/Public/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/new/Public/admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="/new/Public/admin/css/morris-0.4.3.min.css">
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
            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i> 管理员信息</a></li>
            <li><a href="tables.html"><i class="fa fa-table"></i> 评论管理</a></li>
            <li><a href="forms.html"><i class="fa fa-edit"></i> 添加新菜</a></li>
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
          <div class="panel-default">
            <h1>管理员信息 </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="icon-dashboard"></i> 首页</a></li>
              <li class="active"><i class="icon-file-alt"></i> 管理员信息</li>
            </ol>
          </div>
          </div>



        </div><!-- /.row -->



     <!-- <div class="col-lg-10"> -->

     <div class="row">

    <div class="col-lg-12 contact-left">
                <div class="bs-example" data-example-id="panel-without-body-with-table">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">管理员列表</div>
                
                        <!-- Table -->
                        <table class="table">
                          <thead>
                               <tr>
                                <th align="left" width="5%">序号</th>
                                <th align="left" width="30%">姓名</th>
                                <th align="left" width="30%">账号</th>
                                <th align="left" width="30%">密码</th>
                                <th align="left" width="5%">选择</th>
                              </tr> 
                          </thead>
                          <tbody>
                            <?php if(is_array($user_list)): foreach($user_list as $key=>$item): ?><tr>
                                  <td><?php echo ($item["id"]); ?></td>
                                  <td><?php echo ($item["name"]); ?></td>
                                  <td><?php echo ($item["account"]); ?></td>
                                  <td><?php echo ($item["password"]); ?></td>
                                  <td> 
                                    <button type="delete" class="btn btn-default" onclick="del_user(<?php echo ($item["id"]); ?>)">删除</button>
                                  </td>
                                </tr><?php endforeach; endif; ?>
                              <script type="text/javascript">

                                function del_user(id){
                                  if (!confirm("确认要删除？")) {
                                    return;
                                  }
                                  var url = "<?php echo U('user/deluser');?>";
                                  $.post(url,{
                                    user_id:id
                                  },function(response){
                                    console.log(response);
                                    // alert(response.msg);
                                    if(response.status == 1)
                                      window.location.reload();
                                    else
                                      alert(response.msg);
                                  },'json');
                                }


                              </script>
                            
                          </tbody>
                        </table>
                    </div>
                    </div>
                
              <div class="col-lg-5 contact-left">
              </div>
              <div class="clearfix"></div>
            </div>

  
</div>  <!-- row -->

     

   </div>
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->



    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="/new/Public/admin/js/jquery-1.10.2.js"></script>
    <script src="/new/Public/admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->    <script src="/new/Public/admin/js/raphael-min.js"></script>
    <script src="/new/Public/admin/js/morris-0.4.3.min.js"></script>
    <script src="/new/Public/admin/js/morris/chart-data-morris.js"></script>
    <script src="/new/Public/admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/new/Public/admin/js/tablesorter/tables.js"></script>

  </body>
</html>