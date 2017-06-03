<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php $c = isset($_GET['b'])?$_GET['b']:1;?> 
<link href="<?php echo CSS_PATH;?>vms/vms.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><link href="<?php echo CSS_PATH;?>vms/ielt9.css" rel="stylesheet" type="text/css" /><![endif]-->
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<div class="clr ct lst">
    <div class="lyt_4">
    	<h5>分类检索</h5>
        <ul class="tp_lst"> 
<?php $nums = count(subcat($CATEGORYS[$catid]['parentid'],0,0,$siteid));?>
<?php $n=1;if(is_array(subcat($CATEGORYS[$catid]['parentid'],0,0,$siteid))) foreach(subcat($CATEGORYS[$catid]['parentid'],0,0,$siteid) AS $r) { ?>
<?php $num++?>	
            <li <?php if($n == $nums) { ?>class="last"<?php } ?>><a href="<?php echo $r['url'];?>" <?php if($catid == $r[catid]) { ?>class="ac"<?php } ?>><?php echo $r['catname'];?></a></li> 
 <?php $n++;}unset($n); ?>			
        </ul>
    </div>
     <div class="wp lyt_3">
    	<div class="lstnav">
    	  <span></span><span>本页共有<strong id="nums"><?php echo $items;?></strong>个符合条件的内容  </span> <h5><?php echo $catname;?></h5>
    	</div> 
        <ul class="tpli">
            <li class="clr"><span>按画质：</span> 
   			<?php $n=1;if(is_array(video_filters('vision',$modelid,$vision_rang))) foreach(video_filters('vision',$modelid,$vision_rang) AS $r) { ?>
				<?php echo $r['menu'];?>
			<?php $n++;}unset($n); ?>
             </li>
        </ul>
		<ul class="clr ulitg">
            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>&b=1" <?php if($c==1) { ?>class="ac"<?php } ?>>最近更新</a></li>
             <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>&b=2" <?php if($c==2) { ?>class="ac"<?php } ?>>最近热播</a></li>
            <li><a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>&b=3" <?php if($c==3) { ?>class="ac"<?php } ?>>最热评论</a></li>
        </ul>
		<div class="lstnr">
		
		<?php if($c==1) { ?>
        <div class="bct">
        	<ul class="clr col4 col5"> 
			<?php $urlrule = video_makeurlrule();?>
  			<?php $sql = video_filters_sql($modelid,$catid);$y=1;$listorder = array(1=>'price ASC', 'price DESC', 'updatetime ASC', 'updatetime DESC');?>
 			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e50920dfd61c509e1f6f4815af3845d4&action=lists&where=%24sql&catid=%24catid&num=15&order=+listorder+desc%2Cid+DESC&moreinfo=1&page=%24page&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('where'=>$sql,'catid'=>$catid,'order'=>' listorder desc,id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('where'=>$sql,'catid'=>$catid,'order'=>' listorder desc,id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $nums=count($data)?>
 			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>	
			<!-- 获取视频详细信息 -->
			<?php $video_info = get_vid($v[id], $v[catid], $isspecial = 0);?> 
			
                 <li>
                	<div class="w120">
                        <div class="imgbox"><span class="tm"><?php echo dataformat($video_info['timelen']);?></span>
 						<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $v['id'];?>&catid=<?php echo $v['catid'];?>&title=<?php echo $v['title'];?>" class="j" title='<?php echo $v['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $v['catid'];?>" contentid="<?php echo $v['id'];?>"></a>
 						
						<a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="120" height="75"></a></div>
                        <div class="lh21"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v[title],16,false);?></a></div>
                        <div class="sz"><span class="shows">播放数：<cite><?php echo get_views('c-'.$CATEGORYS[$v[catid]][modelid].'-'.$v['id']);?></cite></span><span>评论：<cite><?php echo get_comments(id_encode("content_$v[catid]",$v[id],$siteid));?></cite></span></div>
                    </div>
                </li> 
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
			<?php if($pages) { ?>
            <div class="pages"> 
			<?php echo $pages;?>
 			</div>
			<?php } ?>
        </div>
		<?php } ?>
		
		<?php if($c==2) { ?>
        <div class="bct">
        	<ul class="clr col4 col5"> 
			<?php $urlrule = video_makeurlrule();?>
 			<?php $sql = video_filters_sql($modelid,$catid);$y=1;$listorder = array(1=>'price ASC', 'price DESC', 'updatetime ASC', 'updatetime DESC');?>
 			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b75a46bb0d9f9ace2cd8573d103d2432&action=hits&catid=%24catid&num=15&order=views+DESC&page=%24page&urlrule=%24urlrule\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$pagesize = 15;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'views DESC','limit'=>$offset.",".$pagesize,'action'=>'hits',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>$offset.",".$pagesize,'action'=>'hits',));}?>
 			<?php $nums=count($data)?>
 			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>	
			<!-- 获取视频详细信息 -->
			<?php $video_info = get_vid($v[id], $v[catid], $isspecial = 0);?> 
                <li>
                	<div class="w120">
                        <div class="imgbox"><span class="tm"><?php echo dataformat($video_info['timelen']);?></span>
						<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $v['id'];?>&catid=<?php echo $v['catid'];?>&title=<?php echo $v['title'];?>" class="j" title='<?php echo $v['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $v['catid'];?>" contentid="<?php echo $v['id'];?>"></a>
						
						<a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="120" height="75"></a></div>
                        <div class="lh21"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v[title],16,false);?></a></div>
                        <div class="sz"><span class="shows">播放数：<cite><?php echo get_views('c-'.$CATEGORYS[$v[catid]][modelid].'-'.$v['id']);?></cite></span><span>评论：<cite><?php echo get_comments(id_encode("content_$v[catid]",$v[id],$siteid));?></cite></span></div>
                    </div>
                </li> 
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
			<?php if($pages) { ?>
            <div class="pages"> 
			<?php echo $pages;?>
 			</div>
			<?php } ?>
        </div>
		<?php } ?>
		
		<!-- 最多评论 -->
		<?php if($c==3) { ?>
        <div class="bct">
        	<ul class="clr col4 col5"> 
			<?php $urlrule = video_makeurlrule();?>
 			<?php $sql = video_filters_sql($modelid,$catid);$y=1;$listorder = array(1=>'price ASC', 'price DESC', 'updatetime ASC', 'updatetime DESC');?>
 			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=9cbeef3848b4d921c69d263d166e5115&action=bang&num=15&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'15',));}?>
  			<?php $nums=count($data)?>
 			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<?php $com_arr = explode('_',$v['commentid']);$id_arr = explode('-',$com_arr[1]); $video_array =get_pic($id_arr[1],$id_arr[0]); ?> 
			<!-- 获取视频详细信息 -->
			<?php $video_info = get_vid($id_arr[1], $id_arr[0], $isspecial = 0);?> 
                <li>
                	<div class="w120">
                        <div class="imgbox"><span class="tm"><?php echo dataformat($video_info['timelen']);?></span>
						<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $id_arr['1'];?>&catid=<?php echo $id_arr['0'];?>&title=<?php echo $v['title'];?>" class="j" title='<?php echo $v['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $id_arr['0'];?>" contentid="<?php echo $id_arr['1'];?>"></a>
						
						<a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $video_array['thumb'];?>" width="120" height="75"></a></div>
                        <div class="lh21"><a href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v[title],16,false);?></a></div>
                        <div class="sz"><span class="shows">播放数：<cite><?php echo get_views('c-'.$CATEGORYS[$id_arr[0]][modelid].'-'.$id_arr[1]);?></cite></span><span>评论：<cite><?php echo get_comments(id_encode("content_$id_arr[0]",$id,$siteid));?></cite></span></div>
                    </div>
                </li> 
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
			<?php if($pages) { ?>
            <div class="pages"> 
			<?php echo $pages;?>
 			</div>
			<?php } ?>
        </div>
		<?php } ?>
		
		
        </div>
    </div>
</div>
<div class="ft"></div>
<script type="text/javascript">
$(function(){
	$('#nums').html('<?php echo $nums;?>');  
	ChangStatus(); 
})

/*
*改变加入清单的图片事件和图片显示
*/
function ChangStatus(){
	var player_list="";
	var list_array= new Array();
	player_list = getcookie('player_list');
 	if(player_list!=null){
		list_array = player_list.split("|");
		if(list_array.length>0){
 			for(var i=0;i<list_array.length;i++) {
				var player;
				player=list_array[i].split("@");  
				$("a[contentid='"+player[2]+"']").removeClass("j"); 
				$("a[contentid='"+player[2]+"']").addClass("j2");  
			}
		}
	}
}
 

//加入到播放列表
function toggle(object) { 
 	var url = $(object).attr("href");
	var title = $(object).attr("title");
	var id = $(object).attr("contentid");
	var catid = $(object).attr("catid");
   	var isCookieExist;   
     isCookieExist = getcookie('player_list');  
	if(!isCookieExist){
 		var new_player = url+'@'+title+'@'+id+'@'+catid;
		player_list = new_player;
	} else{
		var player_list = getcookie('player_list'); 
 		//判断是否已经存在
 		if(player_list.indexOf(id)!=-1){
			//已经加入播放菜单则设置COOKIE,直接跳转至播放页面
   			var list_array = player_list.split("|"); 
			var player=new Array();
			for(var i=0;i<list_array.length;i++) {
 				player = list_array[i].split("@"); 
				if(id == player[2]){
					setcookie('now',i);
					window.open(player[0],'_blank');
				}
			}
  			return false;
		}  
		var new_player = '|'+url+'@'+title+'@'+id+'@'+catid;
		player_list +=new_player;
	}
 	//改变图片样式，并且去掉onclick函数
 	setcookie('player_list',player_list,1); 
	$("a[contentid='"+id+"']").removeClass("j"); 
	$("a[contentid='"+id+"']").addClass("j2"); 
	$("a[contentid='"+id+"']").unbind("click");  
	return false; 
} 
</script>
<?php include template("content","footer"); ?>
