<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/discoverProduct.css">
<script src="<?php echo CSS_PATH;?>themes/js/jquery.min.js"></script>
<script src="<?php echo CSS_PATH;?>themes/js/discoverProduct.js"></script>
<!-- 产品频道页 begin -->

<div class="disPro_tit">
    <a class="index_a" href="">首页</a>
    <span class="index_disPro"> <?php echo catpos($catid);?> </span>
    
</div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=af2789c8c02d3bbf41e4b9f83f41a257&sql=SELECT+setting+FROM+dyw_poster+WHERE+spaceid+%3D+3+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM dyw_poster WHERE spaceid = 3 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
<div class="disPro_cir">
    <ul class="banner_yyt">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php $narry=json_decode($r[setting],TRUE)?>
        <li class="banner_a_yyt">
            <a href="<?php echo $narry['1']['linkurl'];?>" class="disPro_a_yyt">
                <img src="<?php echo $narry['1']['imageurl'];?>" alt="">
            </a>
        </li>
        <?php $n++;}unset($n); ?>

    </ul>
    <div class="disPro_btn">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <span class="disPro_one"></span>
        <?php $n++;}unset($n); ?>
    </div>
    <div class="arrow_left"></div>
    <div class="arrow_right"></div>
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div class="aboutPro">
    <img class="aboutPro_left" src="<?php echo CSS_PATH;?>themes/image/about_product.jpg" alt="">
    <ul class="aboutPro_right">
       <li class="aboutPro_one">
           <a href=""> · 立即预约活动开始了，快点来参与吧！！ ·店铺满一百送精美礼品，先到先得。</a>
       </li>
        <li class="aboutPro_one">
           <a href=""> · 店铺满一百送精美礼品，先到先得。</a>
       </li>

    </ul>
</div>
<?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
<div class="duyiz_">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=35215565bf6cabad83fa9e102a72d08b&action=lists&catid=%24v%5Bcatid%5D&num=4&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'4',));}?>
    <?php if($data) { ?>
    <div class="duyiz_title"></div>
    <ul class="duyiz_con">
       <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
       <li class="duyiz_one">
           <a href="<?php echo $r['url'];?>" class="duyiz_a">
               <?php if($r[thumb]) { ?>
               <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
               <?php } else { ?>
               <img src="<?php echo IMG_PATH;?>nopic.gif" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
               <?php } ?>
           </a>
           <a href="<?php echo $r['url'];?>" class="duyiz_b">
               <span></span>
               <span><?php echo str_cut($r[title],17,'');?></span>
               <span></span>
           </a>
           <a href="<?php echo $r['url'];?>" class="duyiz_c">查看详情</a>
       </li>
       <?php $n++;}unset($n); ?>
    </ul>
    <?php } ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
<?php $n++;}unset($n); ?>
<!-- 产品频道也 end -->
<?php include template("content","footer"); ?>