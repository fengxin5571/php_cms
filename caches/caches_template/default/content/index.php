<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php if(is_mobile_end()) { ?>
1
<?php } else { ?>

<?php include template("content","header"); ?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/index.css">
<script src="<?php echo CSS_PATH;?>themes/js/index.js"></script>
<!-- banner begin -->
<div class="banner_yyt">
    <ul class="banner_con">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e790aa3202bc90ba360cc34243008d39&sql=SELECT+setting+FROM+dyw_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM dyw_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php $narry=json_decode($r[setting],TRUE)?>
        <li class="banner_b">
            <div class="banner_s">
                <a class="banner_link" href="<?php echo $narry['1']['linkurl'];?>">
                    <img src="<?php echo $narry['1']['imageurl'];?>" alt="">
                </a>
            </div>
        </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="banner_btn">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e790aa3202bc90ba360cc34243008d39&sql=SELECT+setting+FROM+dyw_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM dyw_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
	        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	        <?php $narry=json_decode($r[setting],TRUE)?>
            <div class="btn_one"></div>
            <?php $n++;}unset($n); ?>
        	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="btn_left"></div>
        <div class="btn_right"></div>
    </ul>
</div>
<!-- banner end -->

<!-- 健康/问答 bengin-->
<div class="health_area">
    <div class="area_title"></div>
    <div class="area_con">
        <div class="area_left">
            <ul class="find_dct">
                <li class="find_dct_a">
                    <span class="dct_a_a"></span>
                    <span class="dct_a_b">找门店</span>
                </li>
                <li class="find_dct_a">
                    <span class="dct_a_a dct_one_yyt"></span>
                    <span class="dct_a_b">找医师</span>
                </li>
                <li class="find_dct_a">
                    <span class="dct_a_a dct_two_yyt"></span>
                    <span class="dct_a_b">找产品</span>
                </li>
                <li class="find_dct_a">
                    <span class="dct_a_a dct_three_yyt"></span>
                    <span class="dct_a_b">找视频</span>
                </li>

            </ul>
            <div class="area_left_con">
                <ul class="find_md">
                    <div class="find_md_title">热门城市</div>
                    <ul class="find_md_con">
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=141">太原市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=2">北京市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=3">上海市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=187">哈尔滨</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=178">长春市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=200">南京市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=304">黄冈市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=151">吕梁市</a>
                        </li>
                        <li class="find_md_one">
                            <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=130">石家庄</a>
                        </li>
                    </ul>
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=8&region=<?php echo $region_id;?>" class="find_md_more">查看更多</a>
                </ul>
                <ul class="find_md">
                    <div class="find_md_title">推荐医师</div>
                    <ul class="find_md_con">
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                    </ul>
                    <a href="doctorList_yyt.html" class="find_md_more">查看更多</a>
                </ul>
                <ul class="find_md">
                    <div class="find_md_title">热门产品</div>
                    <ul class="find_md_con">
                        <li class="find_product">
                            <a href="">独一张 · 温泉</a>
                        </li>
                        <li class="find_product">
                            <a href="">独一张 · 老膏药</a>
                        </li>
                        <li class="find_product">
                            <a href="">独一张 · 仪年堂</a>
                        </li>
                        <li class="find_product">
                            <a href="">独一张 · 炙骨宁</a>
                        </li>
                    </ul>
                    <a href="" class="find_md_more">查看更多</a>
                </ul>
                <ul class="find_md">
                    <div class="find_md_title">热门视频</div>
                    <ul class="find_md_con">
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                        <li class="find_md_one">
                            <a href="">太原店</a>
                        </li>
                    </ul>
                    <a href="" class="find_md_more">查看更多</a>
                </ul>

            </div>
        </div>
        <div class="area_cut_off"></div>
        <!--*************************************************************************************-->
        <div class="area_right">
            <div class="health_select">
                <div class="health_k_q">健康知识</div>
                <div class="health_k_q">健康问答</div>
            </div>
            <ul class="health_zs">
                <?php $TYPE = getcache('type_content','commons');?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=606dd613830644fee9a9013a4de15140&action=position&posid=2&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li class="health_zs_one">
                    <a href="<?php echo $r['url'];?>" class="zs_one_a"> · <?php echo $TYPE[$r['typeid']]['name'];?></a>
                    <span class="zs_one_b">|</span>
                    <a href="<?php echo $r['url'];?>" class="zs_one_c"><?php echo str_cut($r['title'],42,'');?></a>
                    <a href="<?php echo $r['url'];?>" class="zs_one_d"><?php echo str_cut($r[description],36,'');?></a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="health_zs health_zs_">
                <li class="haelth_wd_one">
                    <a href="" class="wd_one_a">为什么高血压患者会血压突然飙升？</a>
                    <a href="" class="wd_one_b">张医师回答：我国的关节炎患者有一亿以上，且人数在不断增加。关节的红、肿、热、痛，功能障碍及关节畸形，严重...</a>
                    <a href="" class="wd_one_c">进入</a>
                </li>
                <li class="haelth_wd_one">
                    <a href="" class="wd_one_a">为什么高血压患者会血压突然飙升？</a>
                    <a href="" class="wd_one_b">张医师回答：我国的关节炎患者有一亿以上，且人数在不断增加。关节的红、肿、热、痛，功能障碍及关节畸形，严重...</a>
                    <a href="" class="wd_one_c">进入</a>
                </li>
                <li class="haelth_wd_one">
                    <a href="" class="wd_one_a">为什么高血压患者会血压突然飙升？</a>
                    <a href="" class="wd_one_b">张医师回答：我国的关节炎患者有一亿以上，且人数在不断增加。关节的红、肿、热、痛，功能障碍及关节畸形，严重...</a>
                    <a href="" class="wd_one_c">进入</a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- 健康/问答 end -->
<!-- 健康讲堂  begin -->
<div class="health_jt">
    <div class="health_jt_title"></div>
    <div class="health_jt_con">
        <a href="" class="health_jt_a">
        <script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=10"></script>
        </a>
        <a href="" class="health_jt_b">
            <span class="health_jt_one">
                <i>太常·视频</i>
                <i>18</i>
                <i></i>
            </span>
        </a>
        <a href="" class="health_jt_b">
            <span class="health_jt_one">
                <i>太常·视频</i>
                <i>18</i>
                <i></i>
            </span>
        </a>
        <ul class="health_jt_circle">
            <!--228-->
            <li class="health_jt_yyt"></li>
            <li class="health_jt_yyt"></li>
            <li class="health_jt_yyt"></li>
            <li class="health_jt_yyt"></li>
        </ul>
    </div>
</div>
<!-- 健康讲堂 end -->

<!-- 商品推荐 begin -->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b2e484dcba0404b31a65add3f8acd30&action=position&posid=1&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','limit'=>'4',));}?>
<?php if($data) { ?>
<div class="goods_for">
    <div class="goods_for_tirle"></div>
    <ul class="goods_for_con">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li class="goods_for_one">
            <a href="<?php echo $r['url'];?>" class="goods_for_img">
            <?php if($r[thumb]) { ?>
            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>'>
            <?php } else { ?>
            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>">
            <?php } ?>
            </a>
            <div class="goods_for_name">
                <span></span>
                <span><?php echo str_cut($r[title],17,'');?></span>
                <span></span>
            </div>
            <a href="<?php echo $r['url'];?>" class="goods_for_more">查看详情</a>
        </li>
        <?php $n++;}unset($n); ?>

    </ul>
    <div class="goods_forMore" ><a href="<?php echo $CATEGORYS['18']['url'];?>" style="color: #fff">更多</a></div>
    <div class="goods_forME">TRADITIONAL NOURISHING</div>
<?php } ?>
</div>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<!-- 商品推荐 end -->
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
<?php include template("content","footer"); ?>
<?php } ?>