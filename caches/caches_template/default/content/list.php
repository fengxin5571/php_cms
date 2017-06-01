<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>themes/css/detailList.css">

<!-- 文章列表页 begin -->
<div class="detailListBox_qty">
	<div class="detailSmallListBox_qty">
		<!--小健康资讯开始-->
		<div class="detailHome_qty">
			<div class="homeFont">首页<span>&gt <?php echo catpos($catid);?></span></div>
		</div>
		<!--小健康资讯结束-->
		<!--健康咨询开始-->
		<div class="healthBox_qty">
			<div class="healthImgBox_qty">
				<img src="<?php echo IMG_PATH;?>/dyw/store_qty.png"/>
			</div>
			<div class="healthRightBox_qty">
				<div class="healthTopFont_qty">
					健康<span>资讯</span>
				</div>
				<div class="healthBottomFont_qty">
					HEALTH<span>INFORMATION</span>
				</div>
			</div>
		</div>
		<!--健康资讯结束-->
		<!--健康资讯列表开始-->
		<div class="detailSmallBox_qty">
			<div class="detailList_qty">
				<ul class="list_qty">
				    <?php $j=1?>
				    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b22291ce36e15a79267c70ea285e17a5&action=lists&catid=%24catid&num=8&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 8;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				    <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
					<li>
						<div class="listSmall_qty">
							<h3><?php echo sprintf("%02d", $j);?></h3>
							<div class="listImgBox_qty">
							    <?php if($r[thumb]) { ?>
								<img src="<?php echo $r['thumb'];?>" width="418" height='169'/>
								<?php } else { ?>
								<img src="<?php echo CSS_PATH;?>themes/image/dybg3_qty.jpg" width="418" height='169'/>
								<?php } ?>
							</div>
							<div class="detailRightBox_qty">
								<h5><?php echo $r['title'];?></h5>
								<span class="english_qty">HEALTH IS ALWAYS AROUND YOU</span>
								<span class="time_qty"><?php echo date('Y-m-d',$r[inputtime]);?></span>
								<p>
									<?php echo $r['description'];?>
								</p>
							</div>
						</div>
						<div class="more_qty"><a href="<?php echo $r['url'];?>">查看</a></div>
					</li>
					<?php $j++?>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
			</div>
		</div>
		<!--健康咨询列表结束-->
	</div>
	<!--咨询列表分页开始-->
	<div id="pages" class="text-c"><?php echo $pages;?></div>
	
	<!--咨询列表分页结束-->
</div>



<!-- 文章列表页 end -->
<?php include template("content","footer"); ?>