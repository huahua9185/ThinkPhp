<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="/thinkphp/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg-primary">
  <div class="container">
          <div class="col-lg-4 col-lg-offset-5"><h4>欢迎登录计划生育药品管理系统</h1></div>
          
          <div class="col-lg-4 col-lg-offset-4">
            
            <form action="/thinkphp/Home/Login" method="post" class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-3 control-label">用户名:</label>
                <div class="col-sm-9"><input type="text" name="username" class="form-control"></div> 
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码:</label>
                <div class="col-sm-9"><input type="password" name="password" class="form-control"></div>
                
              </div>
              <div class="form-group">
              <div class="col-sm-9 col-sm-offset-3"><input type="submit"  value="提交" class="form-control btn btn-info"></div>
              </div>
              
            </form>
          </div>

  </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/thinkphp/Public/jquery-1.12.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/thinkphp/Public/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>