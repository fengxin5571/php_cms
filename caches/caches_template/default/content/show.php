<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/all.css"/>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/problem_details_zdw.css"/>

<!-- 文章详情页 begin -->

<div class="new_show">
    <!--导航条-->
    <div class="new_nav">
			<div class="homeFont">首页<span>&gt <?php echo catpos($catid);?></span></div>
    </div>
    <div class="new_main">
        <div class="new_header">
            <h1><?php echo $title;?></h1>
            <ul>
                
                <li><a href="#"><?php echo date('Y-m-d',$inputtime);?></a></li>
            </ul>
        </div>
        <div class="content">
        <?php if($allow_visitor==1) { ?>
				<?php echo $content;?>
				<!--内容关联投票-->
				<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>
                
	    <?php } else { ?>
				<CENTER><a href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>"><font color="red">阅读此信息需要您支付 <B><I><?php echo $readpoint;?> <?php if($paytype) { ?>元<?php } else { ?>点<?php } ?></I></B>，点击这里支付</font></a></CENTER>
	    <?php } ?>
        </div>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
    </div>
       
</div>

<!-- 文章详情页 end -->

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>