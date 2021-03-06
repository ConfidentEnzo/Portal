<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>评论管理</title>

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
            <li><a href="index.html"><i class="fa fa-dashboard"></i> 管理员信息</a></li>
            <li class="active"><a href="tables.html"><i class="fa fa-table"></i> 评论管理</a></li>
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
            <h1>评论管理 </h1>
            <ol class="breadcrumb">
              <li><a href="index.html"><i class="fa fa-dashboard"></i> 首页</a></li>
              <li class="active"><i class="fa fa-table"></i> 评论管理</li>
            </ol>
            
          </div>
        </div><!-- /.row -->

 <div class="row">
           <div class="col-lg-12 contact-left">
            <h2>评论列表</h2>
            <div class="table-responsive">
              <table class="table table-bordered table-hover tablesorter" >
                <thead>
                  <tr>
                    <th width="100">用户名 <i class="fa fa-sort"></i></th>
                    <th width="150">访问时间 <i class="fa fa-sort"></i></th>
                    <th width="600">评论 <i class="fa fa-sort"></i></th>
                    <th width="100">选项 <i class="fa fa-sort"></i></th>
                    
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($comment_list)): foreach($comment_list as $key=>$item): ?><tr>
                      <td><?php echo ($item["user_name"]); ?></td>
                      <td><?php echo ($item["time"]); ?></td>
                      <td><?php echo ($item["content"]); ?></td>
                      <td>
                        <button onclick="del_comment(<?php echo ($item["id"]); ?>)">删除</button>
                      </td>
                    </tr><?php endforeach; endif; ?>
                  
                </tbody>
              </table>
            
          </div>
</div>



   

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="/yingsen/Public/admin/js/jquery-1.10.2.js"></script>
    <script src="/yingsen/Public/admin/js/bootstrap.js"></script>
    <script type="text/javascript">
      function del_comment(id){
        if (!confirm("确认要删除？")) {
          return;
        }
        var url = "<?php echo U('comment/delcomment');?>";
        $.post(url,{
          comment_id:id
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

    <!-- Page Specific Plugins -->
    <script src="/yingsen/Public/admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="/yingsen/Public/admin/js/tablesorter/tables.js"></script>

  </body>
</html>