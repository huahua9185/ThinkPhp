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
	<div data-options="region:'north',border:false" style="height:60px;background:#B3DFDA;padding:10px">north region</div>
	<div data-options="region:'west',split:true,title:'West'" style="width:150px;padding:10px;">
		<div id="left-menu">
			<div title="栏目一"> aaa</div>
			<div title="栏目二">bbb</div>
			<div title="栏目三">cccc</div>
		</div>
	</div>
	<div data-options="region:'east',split:true,collapsed:true,title:'East'" style="width:100px;padding:10px;">east region</div>
	<div data-options="region:'south',border:false" style="height:50px;background:#A9FACD;padding:10px;">south region</div>
	<div data-options="region:'center',title:'Center'"></div>
</body>
</html>