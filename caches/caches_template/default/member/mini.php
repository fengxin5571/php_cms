<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><style>
body,html{background:none; padding:0; margin:0}
.help_ {
    float: right;
    text-align: right;
    width: 80px;
    height: 100%;
    line-height: 50px;
    color: #585858;
	text-decoration: none;
}
.user {
    width: auto;
    text-align: center;
    padding: 0 5px;
    overflow: hidden;
    color: #f69c1c;
    float: left;
}
.person_ {
    text-align: center;
    width: 80px;
    overflow: hidden;
    float: left;
}
.go_out {
    width: 50px;
    text-align: center;
    padding: 0 5px;
    float: left;
}
.login {
    text-align: center;
    float: left;
    width: 50px;
}
.sign {
    text-align: center;
    float: left;
    width: 50px;
}
</style>
<body style="background-color:transparent">
<?php if($_username) { ?>
<a class="help_ user" href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank"><?php echo get_nickname();?></a>
<a class="help_ person_" href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank">个人中心</a>
<a class="help_ go_out" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode($_GET['forward']);?>&siteid=<?php echo $siteid;?>" target="_top">退出</a> 
<?php } else { ?>
<a class="help_ login" href="javascript:alert('正在开发中。。。')" target="_top">登录</a>
<a class="help_ sign" href="javascript:alert('正在开发中。。。')" target="_top">注册</a>
<?php } ?>
</body>
