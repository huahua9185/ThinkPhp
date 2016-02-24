<?php if (!defined('THINK_PATH')) exit();?><body>
<table>
    <th>
        <td>ID</td>
        <td>用户名</td>
        <td>昵称</td>
        <td>状态</td>
        <td>其他信息</td>
    </th>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["id"]); ?></td>
            <td><?php echo ($vo["account"]); ?></td>
            <td><?php echo ($vo["nickname"]); ?></td>
            <td><?php echo ($vo["status"]); ?></td>
            <td><?php echo ($vo["info"]); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
	
</body>