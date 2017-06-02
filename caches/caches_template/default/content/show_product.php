<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/productDetail.css">
<script src="<?php echo CSS_PATH;?>themes/js/jquery.min.js"></script>
<script src="<?php echo CSS_PATH;?>themes/js/producctDetail.js"></script>

<!-- 产品详细页  bengin -->
<div class="proDet_title">
    <a href="<?php echo siteurl($siteid);?>" class="proDet_tit_a">首页</a>
    <span class="proDet_span"> > </span>
    <a href="<?php echo $CATEGORYS[$CATEGORYS[$catid]['parentid']]['url'];?>" class="proDet_tit_a proDet_tit_b"><?php echo $CATEGORYS[$catid]['catname'];?></a>
    <span class="proDet_span"> > </span>
    <a href="" class="proDet_tit_a proDet_tit_c">产品详情页</a>
</div>
<div class="proDet_con">
    <span class="proDet_name"><?php echo $title;?></span>
    <div class="proDet_photo">
        <img src="<?php echo $thumb;?>" alt="<?php echo $title;?>" title='<?php echo $title;?>'>
    </div>
    <div class="proDet_advice">
        <div class="proDet_img"></div>
        <div class="proDet_img_">最新</div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=597fd8e58e0a4445dd139541be335c76&action=relation&relation=%24relation&id=%24id&modelid=1&num=6&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'relation')) {$data = $content_tag->relation(array('relation'=>$relation,'id'=>$id,'modelid'=>'1','order'=>'id DESC','limit'=>'6',));}?>
        <ul class="proDet_advice_con">
            <?php $j=1?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li class="proDet_advice_one">
                <span><?php echo $j;?></span>
                <a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],33,'');?></a>
            </li>
            <?php $j++?>
            <?php $n++;}unset($n); ?>

        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="productP_p"></div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3781d77fff365551139f0428cfc031d0&action=hits&catid=%24catid&num=3&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'3',));}?>
        <ul class="proP_con">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <?php if($r[id] != $id) { ?>
            <a href="<?php echo $r['url'];?>">
            <li class="proP_one">
                <?php if($r[thumb]) { ?>
                <img class="proP_img" src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                <?php } else { ?>
                <img class="proP_img" src="<?php echo IMG_PATH;?>nopic.gif" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
                <?php } ?>
                <div class="proP_msg">
                    <span><?php echo $r['title'];?></span>
                    <span><?php echo number_format($r[views]);?></span>
                    <span>浏览</span>
                </div>
            </li>
			</a>
			<?php } ?>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="proDet_introduce">
        <div class="proIntro_title">
            <div class="proIntro_one">产品介绍</div>
            <div class="proIntro_one">售后保障</div>
            <div class="proIntro_one">产品资料</div>
        </div>
        <div class="proIntro_two"><?php echo $content;?></div>
        <div class="proIntro_two">2</div>
        <div class="proIntro_two">3</div>
    </div>
</div>
<!-- 产品详细页 end -->
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>