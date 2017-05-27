<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 文章频道页  begin -->
<div class="detailBox_qty">
	<div class="detailSmallBox_qty">
		<!--小健康资讯开始-->
		<div class="detailHome_qty">
			<div class="homeFont">首页<span>&nbsp;&nbsp;<?php echo catpos($catid);?></span></div>
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
		<!--健康养生四个开始-->
		<div class="healthDis_qty">
			<ul class="list_qty">
			    <?php $j=1;?>
			    <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
				<li  <?php if($j==1 ) { ?>class="color_qty"<?php } ?>><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
				<?php $j++;?>
				<?php $n++;}unset($n); ?>
				
			</ul>
		</div>
			<!--banner列表开始-->
			<div class="healthBannerBox_qty">
			    <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $v) { ?>
			    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=86eda0f8e40a04196a1a1823ed4452ce&action=lists&catid=%24v%5Bcatid%5D&num=3&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'3',));}?>
				<div class="healthBanner_qty">
				    <!-- 左侧广告位 begin-->
					<div class="healthBannerLeft_qty">
						<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script>
					</div>
					<!-- 左侧广告位  end-->
					<div class="healthBannerRight_qty">
					    <?php $i=1;?>
					    <?php $n=1; if(is_array($data)) foreach($data AS $k => $cv) { ?>
						<div class="healthRightSmall_qty">
						    <a href="<?php echo $cv['url'];?>">
							<div class="healthSmall_qty">
								<h4>&nbsp;<span><?php echo $i;?></span><?php echo $cv['title'];?></h4>
								<div class="time_qty"><?php echo date("Y-m-d",$cv[inputtime]);?></div>
							</div>
							<div class="healthBottomSmall_qty">
								<?php echo $cv['description'];?>
							</div>
							<div class="jiantouBox_qty"> <a href="<?php echo $cv['url'];?>"><span>&gt</span></a></div>
							</a>
						</div>
						<?php $i++;?>
						<?php $n++;}unset($n); ?>
					</div>
			    <div class="moreBox"><a href="<?php echo $v['url'];?>">更多</a></div>
				</div>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<?php $n++;}unset($n); ?>
		</div>
		<!--banner列表结束-->
		<!--健康养生四个结束-->

		
		<!--热点咨询开始-->
		<div class="healthBox_qty">
			<div class="healthImgBox_qty">
				<img src="<?php echo IMG_PATH;?>/dyw/store_qty.png"/>
			</div>
			<div class="healthRightBox_qty">
				<div class="healthTopFont_qty">
					热点<span>资讯</span>
				</div>
				<div class="healthBottomFont_qty">
					HOT&nbsp;<span>SPOT INFORMATION</span>
				</div>
			</div>
		</div>
		<!--热点资讯结束-->
		<!--热点资讯列表开始-->
		
		<ul class="hotBigBox_qty">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=91bf7c51a35ded85f1eb4a13f1205782&action=position&posid=18&thumb=1&order=id&num=6&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'18','thumb'=>'1','order'=>'id',)).'91bf7c51a35ded85f1eb4a13f1205782');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','thumb'=>'1','order'=>'id','limit'=>'6',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
		    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<li class="hotSmallBox_qty">
				<a href="<?php echo $v['url'];?>">
					<div class="hotSmall_qty">
						<div class="hotTopFontBox_qty">
							<span class="bTime_qty"><?php echo date("Y-m-d",$v[inputtime]);?></span>
							<span class="bFont_qty"><?php echo $CATEGORYS[$v['catid']]['catname'];?></span>
						</div>
						<div class="hotImgBox_qty">
							<img src="<?php echo $v['thumb'];?>" width='330' height='132'/>
						</div>
						<div class="hotFont_qty">
							<h5><?php echo $v['title'];?></h5>
						</div>
						<div class="hotFontCenter_qty">
							<?php echo $cv['description'];?>
						</div>
						<div class="rItBox_qty">
							<div href="<?php echo $v['url'];?>">&lt</div>
						</div>
					</div>
				</a>
			</li>
			<?php $n++;}unset($n); ?>
	    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
		<!--热点资讯列表结束-->
		<div class="moreBox"><a href="<?php echo $CATEGORYS['11']['url'];?>">更多</a></div>
	</div>
</div>
<script type="text/javascript">
   
	$(document).ready(function(){
		$(".healthBanner_qty").hide().eq(0).show();
		$(".list_qty li").mouseover(function(){
			$(".list_qty li").eq($(this).index()).addClass("color_qty").siblings().removeClass('color_qty');
			$(".healthBanner_qty").hide().eq($(this).index()).show();
		});
	});
</script>

<!-- 文章频道页 end --> 


	
    

 <!--下面这部分代码是广告代码，可通过删除注释的方法显示出来-->
 <!--  
    <div class="ads">
    	<div class="col-left"><script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/4.js"></script></div>
        <div class="col-auto">
        	<div class="left">推广链接</div>
            <div class="right">这里放广告</div>
        </div>
  </div>
 -->
 
    

<!--  <script type="text/javascript">
function ChannelSlide(Name,Class){
	$(Name+' ul.photo li').sGallery({
		titleObj:Name+' div.title p',
		thumbObj:Name+' .thumb li',
		thumbNowClass:Class
	});
}
new ChannelSlide(".channel-slide","on",311,260);
</script>  -->
<?php include template("content","footer"); ?>