<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
   <head>
      <title>登录</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- 引入 Bootstrap -->
      <link href="http://apps.bdimg.com/libs/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
      <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
    <div class="container">
        <div class="row col-md-6 col-sm-offset-3 login">
            <form class="form-horizontal" action="<?php echo U('Login/index');?>" role="form" method="post">
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">用户名:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="username" name="username" placeholder="用户名" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">密 &nbsp; &nbsp;码:</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control" id="password" name="password" placeholder="密码" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-7">
                        <button type="submit" class="btn btn-primary btn-login">登录</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="alert alert-info text-center mt20" role="alert">测试账号(用户名/密码) 管理员：admin/admin 领导：leader/leader 员工：member/member 演示：demo/demo 本系统仅用于学习用途</div>
</body>
</html>