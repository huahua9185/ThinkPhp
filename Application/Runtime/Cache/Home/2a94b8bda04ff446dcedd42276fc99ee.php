<?php if (!defined('THINK_PATH')) exit();?>
<frameset rows = "20%,*">
<frame src = "<?php echo (THEME_PATH); ?>Index/top.html" />
<frameset cols = "15%,*">
<frame src = "<?php echo (THEME_PATH); ?>Index/left.html" noresize frameborder = "1">
<frame src = "<?php echo (THEME_PATH); ?>Index/right.html" name = "myframe" frameborder = "0">
</frameset>
</frameset>