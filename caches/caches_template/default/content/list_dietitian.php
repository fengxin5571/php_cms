<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/doctorList_yyt.css">
<!--医师列表 begin -->
<div class="doctor_header_yyt">
    <span>首页</span>
    <span> > </span>
    <span><?php echo catpos($catid);?></span>
</div>
<div class="doctor_con">
    <div class="doctor_title"></div>
    <div class="doctor_ad"></div>
    <ul class="doctor_list">
       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=20d4e2ae1f91ae804a512503d2bd2285&action=lists&catid=%24catid&num=5&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
       <li class="doctor_one">
           <a href="<?php echo $r['url'];?>" class="doctor_one_photo">
           <img src="<?php echo thumb($r[thumb],200,150);?>" width="200" height="150" alt="<?php echo $r['title'];?>"/>
           </a>
           <a href="<?php echo $r['url'];?>" class="doctor_oneName"><?php echo $r['title'];?></a>
           <span class="doctor_icon"></span>
           <span class="doctor_phoneNum"><?php echo $r['phone'];?></span>
           <div class="doctor_md">工作时间：<?php echo $r['worktime'];?></div>
           <div class="doctor_md_ab"><?php echo $r['description'];?></div>
           <a href="<?php echo $r['url'];?>" class="doctor_one_more">查看详情</a>
       </li>
       <?php $n++;}unset($n); ?>
       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
    <div class="" id="pages"><?php echo $pages;?></div>
</div>
<!--医师列表 end -->

<?php include template("content","footer"); ?>