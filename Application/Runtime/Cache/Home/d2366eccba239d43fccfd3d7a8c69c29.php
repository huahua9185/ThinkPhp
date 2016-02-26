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
        <div class="panel-heading">修改用户</div>
        <div class="panel-body">
            <form action="/thinkphp/Home/Index/user_edit.html?id=4" method="post" class="form-horizontal">
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-5">
                    <div class="form-group">
                        <lable class="col-md-3" >用户名:</lable>
                        <div class="col-md-6"><input type="text" class="form-control  " name="account" value="<?php echo ($vo["account"]); ?>" readonly></div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >昵称:</lable>
                        <div class="col-md-6"><input type="text" class="form-control " name="nickname" value="<?php echo ($vo["nickname"]); ?>" ></div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >ename:</lable>
                        <div class="col-md-6"><input type="text" class="form-control " name="ename" value="<?php echo ($vo["ename"]); ?>"></div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >密码:</lable>
                        <div class="col-md-6"><input type="text" class="form-control " name="password" value=""></div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >邮箱:</lable>
                        <div class="col-md-6"><input type="text" class="form-control " name="email" value="<?php echo ($vo["email"]); ?>"></div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <lable class="col-md-3" >用户组:</lable>
                        <div class="col-md-6">
                            <select name="role_id" id="group" class="form-control">
                            <?php if(is_array($group)): $i = 0; $__LIST__ = $group;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$go): $mod = ($i % 2 );++$i;?><option value="<?php echo ($go["id"]); ?>" <?php if($go[id]==$vo[role_id]){echo "selected='selected'";} ?>><?php echo ($go["id"]); ?>.<?php echo ($go["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >是否启用:</lable>
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" value="1" <?php echo ($vo[status]?'checked':''); ?>>
                                    <span class="label-warning" >选中为启用，取消勾选为禁用</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <lable class="col-md-3" >备注信息:</lable>
                        <div class="col-md-6"><textarea name="remark" class="form-control" rows="3"><?php echo ($vo["remark"]); ?></textarea>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4"><button type="submit" name="id" value="<?php echo ($vo["id"]); ?>" class="btn-primary form-control">提交修改</button></div>
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