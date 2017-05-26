<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<div class="main photo-channel">
<div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?></div>
<div class="bk10"></div>
<div style="margin-bottom:10px">
	<span>位置:<?php echo $_city;?></span> <button onclick="show_area()">点击切换</button>
</div>
<script type="text/javascript">
function show_area(){
	var area_div=document.getElementById('area_div');
	if(area_div.style.display == "block"){
		area_div.style.display ='none';
	}else{
		area_div.style.display ='block';
	}
	
}
</script>
<div style="display:none;margin-bottom:10px" id="area_div">
	<select  id="province" onchange="region.changed(this,'selCities',1)">
	<option value='0'>请选择</option>
	<?php $n=1;if(is_array(show_linkage(1,0,$modelid,'zone',0))) foreach(show_linkage(1,0,$modelid,'zone',0) AS $r) { ?>
	<option value="<?php echo $r['value'];?>"><?php echo $r['name'];?></option>
	<?php $n++;}unset($n); ?>
	</select>
</div>
    <?php $sql = structure_filters_sql($modelid)?>  
    <?php $urlrule = makeurlrule()?>  
	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8ad8e5ac620b0ad0ff18c9d79f2b027&action=lists&where=%24sql&catid=%24catid&num=10&order=id+DESC&page=%24page&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('where'=>$sql,'catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('where'=>$sql,'catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
		<ul class="photo-list picbig">
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li>
			<div class="img-wrap">
			<a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>"/></a>
			</div>
			<span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>
			</li>
			<?php $n++;}unset($n); ?>
		</ul>
		<div id="pages" class="text-c"><?php echo $pages;?></div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>
<?php include template("content","footer"); ?>