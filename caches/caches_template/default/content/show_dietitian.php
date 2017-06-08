<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/public.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/doctorCategory_yyt.css">
<!-- 知道老师详细页 begin -->
<div class="docCate_con" style="font-family: 微软雅黑, sans-serif;font-size:16px">
    <div class="dicCate_title">
        <a href="<?php echo siteurl($siteid);?>" class="docCate_ab">首页</a>
        <span> > </span>
        
        <span> <?php echo catpos($catid);?></span>
        <a href="<?php echo $url;?>" class="docCate_ab teacher_cate"><?php echo $title;?></a>
    </div>
    <div class="dicCate_header"></div>
    <div class="dicCate_one">
        <a href="javascript:;" class="dicCate_left">
            <img src="<?php echo thumb($thumb,242,272);?>" alt="" width="242" height="272">
        </a>
        <div class="dicCate_right">
            <div class="docCate_right_top">
                <span class="docCate_nameYyt"><?php echo $title;?>医师</span>
                <span class="docCate_listYyt">健康用药指导老师</span>
                <span class="docCate_nameYyt2">JON ZHANG</span>
            </div>
            <ul class="dicCate_right_bottom">
                <li><b>工作时间 : </b><?php echo $worktime;?></li>
                <li><b>联系电话 : </b><?php echo $phone;?></li>
                <li><b>所在门店 : </b><?php echo $store['title'];?></li>
                <li><b>资历说明 : </b><?php echo $aptitude;?></li>
                <li><?php echo $content;?></li>
            </ul>
        </div>
        <!--625   70-->
    </div>
    <div class="dicCate_two">
        <img src="<?php echo CSS_PATH;?>themes/image/honor_wall_zdw.png"/>
        <ul>
            <?php $n=1;if(is_array($honor)) foreach($honor AS $h) { ?>
            <li><img src="<?php echo $h['url'];?>" alt="<?php echo $h['alt'];?>" width="288" height='298'/></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <!--  <button>换一张</button>-->
    </div>
    <div class="dicCate_three">
        <img src="<?php echo CSS_PATH;?>themes/image/wtjl_zdw.png"/>
        <div class="dicCate_three_left">
            <h2>健康用药指导老师回答</h2>
            <h2>遗传性多发性骨瘤怎么治疗？预后如何？</h2>
            <p>遗传性多发性骨软骨瘤亦称为多发性外生骨疣、骨干端连续症、遗传性畸形性软骨发育异常症等。目前国内外多数学者采用遗传性多发性骨软骨瘤这一名称。
                <br/>治疗：<br/>
                无症状者不需处理。如有疼痛，肢体功能障碍者、骨骼发育畸形，或有合并症时，可做局部肿瘤切除，矫正骨骼畸形应待骨骼发育成熟之后进行，以免畸形复发。
                <br/>预后：<br/>
                如发生恶变可转化为软骨肉瘤、恶性纤维组织细胞瘤或骨肉瘤。一旦恶变应采取相应的治疗措施，以求治愈。
            </p>
        </div>
        <div class="dicCate_three_right">
            <ul>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>
                <li class="question_a_yyt">
                    <a href=""> · 遗传性多发性骨瘤怎么治疗？预后如何？</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="dicCate_four" style="padding-bottom: 20px;">
        <img src="<?php echo CSS_PATH;?>themes/image/video_area_zdw.png"/>
        <div class="health_jt_con">
            <a href="" class="health_jt_a">
            <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=10"></script>
            </a>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ddb150070004a1dbd67e9027888eedd&action=hits&catid=23&num=2&order=views+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'23','order'=>'views asc','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <a href="<?php echo $r['url'];?>" class="health_jt_b">
            <?php if($r[thumb]) { ?>
	        <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="440" height='283' style="margin-top: 0px;">
	        <?php } else { ?>
	        <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="440" height='283' style="margin-top: 0px;">
	        <?php } ?>
            <span class="health_jt_one">
                <i><?php echo str_cut($r[title],50,"");?></i>
                <i><?php echo $r['views'];?></i>
                <i></i>
            </span>
            </a>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5f38ea01db0bb5cd15ab2acf45c2213a&action=position&posid=16&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder DESC','limit'=>'4',));}?>
            <ul class="health_jt_circle">
                <!--228-->
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	            <li class="health_jt_yyt">
	            <a href="<?php echo $r['url'];?>">
	            <?php if($r[thumb]) { ?>
	            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="206" height='122' style="margin-top: 0px;">
	            <?php } else { ?>
	            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="206" height='122' style="margin-top: 0px;">
	            <?php } ?>
	            <div class="healthRoomBs_qty" style="width: 100%;height: 30px;float: left;background: #818189;border-radius: 0px 0px 4px 4px;"><span style="color: #fff;line-height:30px;font-size: 16px ;text-align: center;width:100%"><?php echo str_cut($r[title],25,"");?></span></div>
	            </a>
	            </li>
	            <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<!-- 知道老师详细页 end -->
<?php include template("content","footer"); ?>