<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Full Layout - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/jquery-easyui-1.4.4/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="/thinkphp/Public/jquery-easyui-1.4.4/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../demo.css">
	<script type="text/javascript" src="/thinkphp/Public/jquery-easyui-1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="/thinkphp/Public/jquery-easyui-1.4.4/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="/thinkphp/Public/js/base.js"></script>
</head>
<body class="easyui-layout">
<div region="north" style="height: 100px;"></div>
<div region="west" style="width:200px;" title="导航菜单">
	<div id="menu" >
		<div title="用户管理">
			<div id="user-menu">
			</div>
		</div>
		<div title="权限管理">

		</div>
	</div>
</div>
<div region="center">
	<table id="dg"></table>
</div>
</body>
</html>