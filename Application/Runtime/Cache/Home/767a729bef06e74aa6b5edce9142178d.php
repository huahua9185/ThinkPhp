<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="/thinkphp/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/thinkphp/Public/global.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">项目名称</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">欢迎访问本系统</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Dashboard</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href=<?php echo U('Login/quit');?>>退出</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<input type="text" class="form-control" placeholder="Search...">
					</form>
				</div>
			</div>
		</nav>
	</div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li><a href="<?php echo U('Home/Index/users');?>">用户管理
					<span class="sr-only">(current)</span></a></li>
				<li><a href="<?php echo U('Home/Index/gmanage');?>">用户组管理</a></li>
				<li><a href="#">权限管理</a></li>
				<li><a href="#">Export</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="">Nav item</a></li>
				<li><a href="">Nav item again</a></li>
				<li><a href="">One more nav</a></li>
				<li><a href="">Another nav item</a></li>
				<li><a href="">More navigation</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="">Nav item again</a></li>
				<li><a href="">One more nav</a></li>
				<li><a href="">Another nav item</a></li>
			</ul>
		</div>

		<div class="col-md-10 col-md-offset-2">
			
    <div class="panel panel-primary top">
        <div class="panel-heading">添加用户组</div>
        <div class="panel-body">
            <form action="/thinkphp/Home/Index/group_add.html" method="post" class="form-horizontal">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">组名:</label>
                    <div class="col-sm-2"><input type="text" class="form-control" id="name" name="name"></div>
                </div>
                <div class="form-group">
                    <label for="pid" class="col-sm-2 control-label">PID</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="pid" name="pid"></div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">ename:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="name" name="ename"></div>
                </div>
                <div class="form-group">
                    <label for="remark" class="col-sm-2 control-label">备注:</label>
                    <div class="col-sm-2"> <textarea class="form-control" id="remark" name="remark"></textarea></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2 col-sm-offset-2"><button type="submit"
                                                                  class="btn btn-warning">确认添加
                    </button></div>

                </div>
            </form>
        </div>
    </div>

		</div>
	</div>
</div>















<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/thinkphp/Public/jquery-1.12.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/thinkphp/Public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>