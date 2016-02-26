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
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-1">用户列表</div>
                <a href="<?php echo U('Home/Index/users_add');?>" class="col-xs-1 col-xs-offset-9 btn btn-warning btn-xs">添加新用户</a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-bordered text-center">
                <thead>
                    <tr class="active">
                        <td>序号</td>
                        <td>用户名</td>
                        <td>昵称</td>
                        <td>所属组</td>
                        <td>创建时间</td>
                        <td>修改时间</td>
                        <td>登录次数</td>
                        <td>上次登录时间</td>
                        <td>登录IP</td>
                        <td>状态</td>
                        <td>操作</td>
                    </tr>
                </thead>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["account"]); ?></td>
                        <td><?php echo ($vo["nickname"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["create_time"]); ?></td>
                        <td><?php echo ($vo["update_time"]); ?></td>
                        <td><?php echo ($vo["login_count"]); ?></td>
                        <td><?php echo ($vo["last_login_time"]); ?></td>
                        <td><?php echo ($vo["last_login_ip"]); ?></td>
                        <td><?php if($vo["status"] != 1): ?>锁定
                            <?php else: ?>正常<?php endif; ?>
                        </td>
                        <td><a class="btn btn-danger btn-xs" href="<?php echo U('Home/Index/user_delete');?>?id=<?php echo ($vo["id"]); ?>" role="button">删除</a>
                            <a class="btn btn-info btn-xs" href="<?php echo U('Home/Index/user_edit');?>?id=<?php echo ($vo["id"]); ?>" role="button">修改</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
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