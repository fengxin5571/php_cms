<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="main photo-channel">
<div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?></div>
<div class="bk10"></div>
</div>
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>