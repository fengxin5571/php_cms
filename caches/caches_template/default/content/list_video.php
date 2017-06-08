<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 视频列表页 begin -->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/healthList_qty.css"/>
<body>
<div class="healthListBox_qty">
	<div class="healthListSmallBox_qty">
		<!--小健康讲堂开始-->
		<div class="detailHome_qty">
			<div class="homeFont"><a href="<?php echo siteurl($siteid);?>" style="color: #9CC813;">首页</a><span>&gt健康讲堂</span><span>&gt视频列表</span></div>
		</div>
		<!--小健康讲堂结束-->
		<!--健康讲堂视频开始-->
		<div class="healthVideoBox_qty">
			<!--健康讲堂视频左边开始-->
			<div class="healthVideoLeft_qty">
				<div class="videoFont_qty">视频分类</div>
				<div class="videoBottom_qty">
					<!--视频分类-->
				    <?php $n=1;if(is_array(subcat(20))) foreach(subcat(20) AS $p) { ?>
					<div class="healthBox_qty">
						<div class="healthImgBox_qty">
							<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
						</div>
						<div class="healthRightBox_qty">
							<div class="healthTopFont_qty">
							    <?php $url=$p[url].'&open=1'?>
								<span><a href='<?php echo $url;?>'><?php echo $p['catname'];?></a></span>
							</div>
							<div class="healthBottomFont_qty">
								VID<span>EO</span>
							</div>
						</div>
					</div>
					<!--视频分类-->
					<div class="videoUl_qty">
						<ul>
						    <?php $j=0?>
						    <?php $i=0?>
						    <?php $n=1;if(is_array(subcat($p[catid]))) foreach(subcat($p[catid]) AS $c) { ?>
						    <?php $i=1?>
						    <?php if($j<3) { ?>
							<li>
								<a href=""><?php echo $c['catname'];?></a>
							</li>
							<?php } ?>
							<?php $j++?>
							<?php $n++;}unset($n); ?>
							<?php if($i>0) { ?>
							<li>
								<a href="<?php echo $p[url].'&open=1'?>">全部&nbsp;&nbsp;&nbsp;&nbsp;》</a>
							</li>
							<?php } ?>
						</ul>
					</div>
					<!--四小-->
					<?php $n++;}unset($n); ?>
				</div>
			</div>
			<!--健康讲堂视频左边结束-->
			<!--健康讲堂视频右边开始-->
			
			<div class="healthVideoRight_qty">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=936375e77957c364712961d644082fa1&action=lists&catid=%24catid&num=12&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 12;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<ul>
				    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li>
						<div class="healthVideoS_qty">
							<a href="<?php echo $r['url'];?>">
							<?php if($r[thumb]) { ?>
			                <img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" width="226" height='164'>
			                <?php } else { ?>
			                <img src="<?php echo IMG_PATH;?>nopic.gif" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>">
			                <?php } ?>
							</a>
						</div>
						<div class="healthVideoSmallBottom_qty">
							<div class="videoSmall_qty">
								<span><?php echo str_cut($r[title],17,'');?></span>
								<div>
									<img src="<?php echo CSS_PATH;?>themes/image/eye_qty_03.png"/>
									<span><?php echo get_views('c-'.$CATEGORYS[$r[catid]][modelid].'-'.$r['id']);?></span>
								</div>
							</div>
						</div>
					</li>
					<?php $n++;}unset($n); ?>
				</ul>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
			<!--健康讲堂视频右边开始-->
		</div>
		<!--健康讲堂视频结束-->
		<div class="more_qty">
			<?php echo $pages;?>
		</div>
	</div>
</div>



<!-- 视频列表页 end -->

<?php include template("content","footer"); ?>
