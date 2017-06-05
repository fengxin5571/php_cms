<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/all.css"/>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/problem_details_zdw.css"/>

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
				<?php echo $content;?>
				<!--内容关联投票-->
				<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>
                
	    
        </div>
        <div id="pages" class="text-c"><?php echo $pages;?></div>
    </div>
       
</div>

<?php include template("content","footer"); ?>