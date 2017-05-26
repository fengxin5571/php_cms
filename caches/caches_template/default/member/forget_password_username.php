<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>phpcmsV9 - <?php echo L('member','','member').L('manage_center');?></title>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.submit,.pass-logo a,.form-login .input label,.item span,#content h2 span em{display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;}
.blue,.blue a{color:#377abe},.submit input{cursor:hand;}
.log{line-height:24px; height:24px;float:right; font-size:12px}
.log span{color:#ced9e7}
.log a{color:#049;text-decoration: none;}
.log a:hover{text-decoration: underline;}
#header{ height:94px; background:url(<?php echo IMG_PATH;?>member/h.png) repeat-x}
#header .logo{ padding-right:100px;float:left;background:url(<?php echo IMG_PATH;?>member/login-logo.png) no-repeat right 2px;}
#header .content{width:920px; margin:auto; height:60px;padding:10px 0 0 0}
#content{width:920px; margin:auto; padding:36px 0 0 0}
#content{width:920px; margin:auto; padding:20px 0 0 0; overflow:auto}
.form-login{width:420px; padding-left:40px}
#content h2{font-size:25px;color:#494949;border-bottom: 1px dashed #CCC;padding-bottom:3px; margin-bottom:10px}
#content h2 span{font-size:12px; font-weight:normal}
#content h2 span em{background: url(<?php echo IMG_PATH;?>member/order.png) no-repeat 0px -16px; width:15px; height:15px; line-height:15px; text-align:center; margin-right:5px; color:#FFF}
#content h2 span.on{ color:#333; font-weight:700}
#content h2 span.on em{background-position: 0px 0px;}

.form-login .input{ padding:7px 0; overflow:hidden; clear:both}
.form-login .input label{ width:180px;font-size:14px; color:#8c8686; text-align:right; float:left}
.form-login .input .form{ width:560px; float:left}
.take,.reg{padding:0 0 0 84px}
.take .submit{margin-top:10px}
.form-login .hr{background: url(<?php echo IMG_PATH;?>member/line.png) no-repeat left center; height:50px;}
.form-login .hr hr{ display:none}

.form-reg{padding:10px 0 0 14px; width:700px; border-right:1px solid #ccc}
.form-reg .input label{ width:200px}
.form-reg .input label.type{ width:auto; color:#000; padding-right:10px}
.form-reg .reg{padding:10px 0 0 120px}
.form-reg .reg .submit{ margin-bottom:5px}

.submit{padding-left:3px}
.submit,.submit input{ background: url(<?php echo IMG_PATH;?>member/but.png) no-repeat; height:29px;}
.submit input{background-position: right top; border:none; padding:0 10px 0 7px; font-size:14px}
.reg{ color:#666; line-height:24px}
.reg .submit{background-position: left -35px; height:35px}
.reg .submit input{background-position: right -35px; font-weight:700; color:#fff; height:35px}
.reg-auto{ padding:10px 0 0 20px}
.reg-auto p{ margin-bottom:10px; color:#666;}
.col-1{position:relative; float:right; border:1px solid #c4d5df; zoom:1;background: url(<?php echo IMG_PATH;?>member/member_title.png) repeat-x; width:310px; margin: auto; height:304px}
.col-1 span.o1,
	.col-1 span.o2,
	.col-1 span.o3,
	.col-1 span.o4{position:absolute;width:3px;height:3px;background: url(images/fillet.png) no-repeat}
	.col-1 span.o1{background-position: left -6px; top:-1px; left:-1px}
	.col-1 span.o2{background-position: right -6px; top:-1px; right:-1px}
	.col-1 span.o3{background-position: left bottom; bottom:-1px; left:-1px}
	.col-1 span.o4{background-position: right bottom; bottom:-1px; right:-1px;}
.col-1 .title{color:#386ea8; padding:5px 10px 3px}
.col-1 div.content{padding:0px 10px 10px}
.col-1 div.content h5{background: url(<?php echo IMG_PATH;?>member/ext-title.png) no-repeat 2px 10px; height:34px}
.col-1 div.content h5 strong{ visibility: hidden}
.pass-logo{ margin:auto; width:261px; padding-top:15px}
.pass-logo a img{ border:1px solid #ddd}
.pass-logo a{border:3px solid #fff}
.pass-logo a.logo,
.pass-logo a:hover{border:3px solid #e8f1f1;}
.pass-logo p{border-top: 1px solid #e1e4e8; padding-top:15px}
.item{padding:10px 0; vertical-align:middle; margin-bottom:10px}
.item span{ color:#8c8686}

#footer{color:#666; line-height:24px;width:920px; margin:auto; text-align:center; padding:12px 0; margin-top:52px; border-top:1px solid #e5e5e5}
#footer a{color:#666;}

.point{border:1px solid #ffbf7a; background:#fffced; margin-bottom:10px; margin-right:100px;margin-left:50px;position:relative}
.point .content{padding:8px 10px;}
.point .content .title{color:#ff8400}
.point .content p{color:#777; text-indent:20px}
.point span.o1,
	.point span.o2,
	.point span.o3,
	.point span.o4{position:absolute;width:3px;height:3px;background: url(<?php echo IMG_PATH;?>fillet.png) no-repeat; overflow:hidden}
	.point span.o1{background-position: left top; top:-1px; left:-1px}
	.point span.o2{background-position: right top; top:-1px; right:-1px}
	.point span.o3{background-position: left -3px; bottom:-1px; left:-1px}
	.point span.o4{background-position: right -3px; bottom:-1px; right:-1px;}
	
.submit button.hqyz{margin:0px; padding:0px; border:none; cursor:pointer; }
.submit button.hqyz{
    background-position: 100% 0%;
    border: medium none;
    font-size: 12px;
    padding: 0 10px 0 7px;
}
.submit button.hqyz{
    background: url("http://test.phpcms.cn/statics/images/member/but.png") no-repeat 100% 0px;
    height: 29px;
    width: auto;
	
}

#mobile_div input{*margin-bottom:12px;*_padding:0px 0px 6px 0px}
</style>
</head>
<body>
<div id="header">
	<div class="content">
	<div class="logo"><a href="<?php echo $siteinfo['domain'];?>"><img src="<?php echo IMG_PATH;?>v9/logo.jpg"/></a></div>
    <span class="rt log"></span>
    </div>
</div>

<div id="content">
	<h2><?php echo L('use_username_get_password');?></h2>
	<?php if($step==1) { ?>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"请输入用户名",onfocus:"应该为2-20位之间"}).inputValidator({min:2,max:20,onerror:"应该为2-20位之间"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"用户名格式错误"});
});
//-->
</script>

	<form method="post" action="" id="myform">
		<div class="col-left form-login form-reg">
			<div class="point">
				<div class="content">
					<strong class="title">步骤：1. 用户名确认 &nbsp;&nbsp;>&nbsp;&nbsp; 2. 邮箱地址确认 &nbsp;&nbsp;>&nbsp;&nbsp; 3. 重置密码成功</strong>
				</div>
			</div>

			<div class="input"><label>请输入用户名：</label><input type="text" id="username" name="username" size="36" class="input-text"></div>
			<div class="input"><label><?php echo L('checkcode');?>：</label><input type="text" id="code" name="code" size="10" class="input-text"><?php echo form::checkcode('code_img', '4', '14', 80, 24);?></div>

			<div class="reg">
				<div class="submit">
				<input type="hidden" name="step" value="2">
				<input type="submit" name="dosubmit" value="<?php echo L('submit');?>" style="width:60px"></div> &nbsp;&nbsp;&nbsp;&nbsp;<a href="?m=member&c=index&a=public_get_password_type">重新选择验证方式</a>
			</div>
		</div>
	</form>
	<?php } elseif ($step==2) { ?>
	<form method="post" action="" id="myform">
		<div class="col-left form-login form-reg">
			<div class="point">
				<div class="content">
					<strong class="title">步骤：1. 用户名确认 &nbsp;&nbsp;>&nbsp;&nbsp; 2. 邮箱地址确认 &nbsp;&nbsp;>&nbsp;&nbsp; 3. 重置密码成功</strong>
				</div>
			</div>

 <div class="input"><label> 您绑定的邮箱账号为：</label><?php echo substr($r['email'],0,3);?>****@<?php echo $email_arr['1'];?>
 <input type="hidden" name="step" value="3">
 <span id="mobile_div"><button onclick="get_verify()" type="button" class="button">点击获取邮箱校验码</button></span>
 <span id="mobile_send" style="display:none">，邮箱校验码已发送成功，请查收，请在5分钟内完成验证！</span>
 </div>
<script type="text/javascript">
<!--
	function get_verify() {
		$.get("?m=member&c=index&a=public_get_email_verify",{ session_code: '<?php echo $_SESSION['code'];?>',random:Math.random()}, function(data){
			if(data=="1") {
				$("#mobile_div").hide();
				$("#mobile_send").show();
			}
		});
	}
//-->
</script>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#email_verify").formValidator({onshow:"邮箱校验码",onfocus:"应该为8位字符"}).inputValidator({min:8,max:8,onerror:"应该为8位字符"});
});
//-->
</script>
			<div class="input"><label>邮箱校验码：</label><input type="text" name="email_verify" id="email_verify" value="" size="14" class="input-text"></div>
			
			
			
			<div class="reg">
				<div class="submit"><input type="submit" name="dosubmit" value="<?php echo L('submit');?>" style="width:60px"></div>
			</div>
		</div>
	</form>
<?php } else { ?>
<div class="col-left form-login form-reg">
			<div class="point">
				<div class="content">
					<strong class="title">步骤：1. 用户名确认 &nbsp;&nbsp;>&nbsp;&nbsp; 2. 邮箱地址确认 &nbsp;&nbsp;>&nbsp;&nbsp; 3. 重置密码成功</strong>
				</div>
			</div>

			<div class="input"><label>您的新密码为：</label><?php echo $password;?></div>
			
		</div>
	<?php } ?>
    <div class="col-auto reg-auto">
    	<p class="f14">
		<?php echo L('already_have_account');?>
        </p>
        <div class="submit"><input type="submit" name="dosubmit" value="<?php echo L('login');?>" onclick="redirect('<?php echo APP_PATH;?>index.php?m=member&c=index&a=login')"></div>
    </div>
</div>

<?php include template('member', 'footer'); ?>