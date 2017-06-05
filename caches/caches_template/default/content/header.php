<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="renderer" content="webkit">
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/header.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/footer.css">
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo CSS_PATH;?>themes/js/header.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>region.js"></script>

</head>
<body>
<div class="ie_seven">
    <div class="ie_con">
        <span>您的浏览器版本过低。为保证您的最佳体验，</span>
        <a href="">请点此更新高版本浏览器</a>
    </div>
</div>
<div class="header_yyt">
    <div class="header_con">
    	<script type="text/javascript">document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="50" frameborder="0" scrolling="no"></iframe>')</script>
        <a class="help_" href="">帮助中心</a>
        <div class="city_">
            <?php echo $_city;?>
            
        </div>
    </div>
</div>

<div class="nav_yyt">
    <div class="nav_con">
        <a class="logo_" href="<?php echo siteurl($siteid);?>/"></a>
        <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank" onsubmit="return false">
        <div class="search">
        <input type="hidden" name="m" value="search"/>
		<input type="hidden" name="c" value="index"/>
		<input type="hidden" name="a" value="init"/>
		<input type="hidden" name="typeid" value="1" id="typeid"/>
		<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
        <input clstag="h|keycount|2016|03a" type="text" onKeyDown="" autocomplete="off" id="key" accesskey="s" class="search_add" placeholder="" value name="q">
        <input type="submit" value="搜 索" class="search_go" />
            
        </div>
        </form>
        <ul class="nav_list">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=96ed926112f95b90d9fe2f193a17abe6&action=category&catid=0&num=12&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'12',));}?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
           <li class="list_one">
               <a class="list_a" href="<?php echo $r['url'];?>">
                   <div class="list_icon">
                   
                   </div>
                   <div class="list_world">
                       <div class="LW_a"><?php echo $r['catname'];?></div>
                       <div class="LW_b">ADVISORY</div>
                   </div>
               </a>
           </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>







