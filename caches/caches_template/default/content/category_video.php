<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/healthSchool_qty.css"/>
<!-- 视频频道页 begin -->

<div class="healthSchoolBox_qty">
			<div class="healthSchoolSmallBox_qty">
				<!--小健康讲堂开始-->
				<div class="detailHome_qty">
					<div class="homeFont">首页<span>&gt <?php echo catpos($catid);?></span></div>
				</div>
				<!--小健康讲堂结束-->
				<!--健康讲堂banner开始-->
				<div class="healthBannerBox_qty">
					<!--banner左边开始-->
					
					<ul class="healthBannerLeft">
					    <?php $n=1;if(is_array(subcat($catid))) foreach(subcat($catid) AS $p) { ?>
						<li class="color_qty"><?php echo $p['catname'];?></span>
							<div class="healthHidden_qty">
								<div class="healthHiddenSmall_qty">
									<h4><?php echo $p['catname'];?>介绍</h4>
									<?php if($p[description]) { ?>
									<div class="studyBox_qty">
										<div>起源</div>
										<p>
											<?php echo str_cut($p[description],197,"");?>
										</p>
									</div>
									<div class="studyBox_qty">
										<div>发展</div>
										<p>
											<?php echo str_cut($p[description],197,"");?>
										</p>
									</div>
									<div class="studyBox_qty">
										<div>发扬</div>
										<p>
											<?php echo str_cut($p[description],197,"");?>
										</p>
									</div>
									<?php } ?>
									<?php if(subcat($p[catid])) { ?>
									<h4 class="top_qty"><?php echo $p['catname'];?>分类</h4>
									<div class="school_qty">
										<div class="list_qty">
										    <?php $n=1;if(is_array(subcat($p[catid]))) foreach(subcat($p[catid]) AS $c) { ?>
											<a href="<?php echo $c['url'];?>"><?php echo $c['catname'];?></a>
											
											<?php $n++;}unset($n); ?>
										</div>
									</div>
									<?php } ?>
								</div>
								
							</div>
						</li>
					    <?php $n++;}unset($n); ?>
					</ul>
					
					<!--banner左边结束-->
					<!--banner右边开始-->
					<div class="healthBannerRight">
						<div class="ImgBox_qty">
						    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e790aa3202bc90ba360cc34243008d39&sql=SELECT+setting+FROM+dyw_poster+WHERE+spaceid+%3D+1+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM dyw_poster WHERE spaceid = 1 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
					        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					        <?php $narry=json_decode($r[setting],TRUE)?>
							<a href="javascript:;">
								<img src="<?php echo thumb($narry[1][imageurl]);?>"/>
							</a>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="btn_qty">
						</ul>
					  	<div class="lrbtn_qty">
							<div class="left_qty">&lt;</div>
							<div class="right_qty">&gt;</div>
					  	</div>
					</div>
					<!--banner右边结束-->
				</div>
				<!--健康讲堂banner结束-->
				<!--小热门视频开始-->
				<div class="healthBox_qty">
					<div class="healthImgBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
					</div>
					<div class="healthRightBox_qty">
						<div class="healthTopFont_qty">
							热门<span>视频</span>
						</div>
						<div class="healthBottomFont_qty">
							VID<span>EO</span>
						</div>
					</div>
				</div>
				<!--小热门视频结束-->
				<!--热门视频开始-->
				<div class="videoBox_qty">
					<div class="videoFont_qty">.独一张视频.</div>
					<div class="videoList_qty">
						<ul>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="videoFont_qty">.三诊视频.</div>
					<div class="videoList_qty">
						<ul>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
							<li>
								<a href="">
									<img src="themes/image/video_qty_07.png"/>
									<div class="videoSmall_qty">
										太常视频
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!--热门视频结束-->
				<!--小保健讲堂开始-->
				<div class="healthBox_qty">
					<div class="healthImgBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
					</div>
					<div class="healthRightBox_qty">
						<div class="healthTopFont_qty">
							保健<span>讲堂</span>
						</div>
						<div class="healthBottomFont_qty">
							HEALTH<span> LECTURE ROOM</span>
						</div>
					</div>
				</div>
				<!--小保健讲堂结束-->
				<!--保健讲堂开始-->
				<div class="healthRoom_qty">
					<div class="healthRoomLeft_qty"></div>
					<div class="healthRoomRight_qty">
						<div class="healthRoomTop_qty">
							<ul>
								<li>
									<div class="healthVideo_qty">
										<a href=""></a>
									</div>
									<div class="heathRoomFont_qty">
										<span>太常视频</span>
										<div>
											<img src="<?php echo CSS_PATH;?>themes/image/eyes_qty_03.png"/>
											18
										</div>
									</div>
								</li>
								<li>
									<div class="healthVideo_qty">
										<a href=""></a>
									</div>
									<div class="heathRoomFont_qty">
										<span>太常视频</span>
										<div>
											<img src="themes/image/eyes_qty_03.png"/>
											18
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="healthRoomBottom_qty">
							<ul class="img_qty">
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
								<li>
									<div class="healthRoomTops_qty">
										<a href=""></a>
									</div>
									<div class="healthRoomBs_qty"></div>
								</li>
							</ul>
							<ul class="lrbtns_qty">
								<li class="lbtns_qty">&lt;</li>
								<li class="rbtns_qty">&gt;</li>
							</ul>
						</div>
					</div>
				</div>
				<!--保健讲堂结束-->
			</div>
		</div>
		<script>
			$(".healthBannerLeft li").mouseover(function(){
	        $(".healthBannerLeft li").eq($(this).index()).addClass("color_qty").siblings().removeClass('color_qty');
	        });
	        
	        
	        
	        //banner轮播图
	        var box=$('.healthBannerRight');
		    var imgbox=$('.ImgBox_qty');
		    var imgboxa=$('.ImgBox_qty>a');
		    var rbtn=$('.right_qty');
		    var lbtn=$('.left_qty');
		    var btn=$('.btn_qty');
		    var length=imgboxa.length;
		    var flag=true;
		    console.log(imgboxa)
		    imgboxa.css('left','100%').eq(0).css('left','0');
		    for(var i=1;i<=length;i++){
		        var str=i==1?'<li class="hot_qty">'+i+'</li>':'<li>'+i+'</li>';
		        btn.append(str);
		    }
		    
		    var $lis=$('.btn_qty>li');
		    var now=0;
		    var next=0;
		    var time=2000;
		    var t=setInterval(moveR,time);
		    function moveR(){
		        next++;
		        if(next==length){
		            next=0;
		        }
		        imgboxa.eq(next).css('left','100%');
		        imgboxa.eq(now).animate({'left':'-100%'});
		        imgboxa.eq(next).animate({'left':'0'},function(){
		            flag=true;
		        });
		        
		        $lis.eq(now).removeClass('hot_qty');
		        $lis.eq(next).addClass('hot_qty');
		        now=next;
		    }
		
		     function moveL(){
		        next--;
		        if(next<0){
		            next=imgboxa.length-1;
		        }
		        imgboxa.eq(next).css('left','-100%');
		        imgboxa.eq(now).animate({'left':'100%'});
		        imgboxa.eq(next).animate({'left':'0'},function(){
		            flag=true;
		        });
		        
		        $lis.eq(now).removeClass('hot_qty');
		        $lis.eq(next).addClass('hot_qty');
		        now=next;
		    }
		
		    $lis.click(function(){
		        if(!flag){return;}
		        flag=false;
		        var i=$(this).index();
		        if(now==i){
		            return;
		        }
		        if(now<i){
		            imgboxa.eq(i).css('left','100%');
		            imgboxa.eq(now).animate({'left':'-100%'},300);
		            imgboxa.eq(i).animate({'left':'0'},300);
		        }else if(now>i){
		            imgboxa.eq(i).css('left','-100%');
		            imgboxa.eq(now).animate({'left':'100%'},300);
		            imgboxa.eq(i).animate({'left':'0'},300);
		        }
		        imgboxa.eq(now).animate({left:'100%'},300);
		        imgboxa.eq(i).animate({left:'0'},300,function(){
		            flag=true;
		        });
		        $lis.eq(now).removeClass('hot_qty');
		        $lis.eq(i).addClass('hot_qty');
		        next=now=i;
		    })
		    box.mouseover(function(){
		        clearInterval(t);
		    })
		    box.mouseout(function(){
		        t=setInterval(moveR,time);
		    })
		    rbtn.click(function(){
		        if(flag){
		            flag=false;
		             moveR();
		        }
		       
		    })
		    lbtn.click(function(){
		        if(flag){
		            flag=false;
		             moveL();
		        }
		       
		    })
			
			
			
			//跑马车效果
			var imgW=$('.img_qty li').width();
			var index=0;
			var s=setInterval(move,2000)
			function move(){
				 $('.img_qty').stop(true,true)
	             $('.img_qty').animate({marginLeft:-imgW},function(){
	           	 $('.img_qty li:first').appendTo($('.img_qty'))
	             $('.img_qty').css({marginLeft:0})
	           })
			}
			$('.rbtns_qty').click(function(){
				move();
			})
			$('.lbtns_qty').click(function(){
				 $('.img_qty').stop(true,true)
				 $('.img_qty li:last').prependTo($('.img_qty'))
				 $('.img_qty').css({marginLeft:-imgW});
				 $('.img_qty').animate({marginLeft:0});
			})
			$('.healthRoomBottom_qty').hover(function(){
				clearInterval(s)
			},function(){
				s=setInterval(move,2000)
			})
		</script>



<!-- 视频频道页 end -->
<link href="<?php echo CSS_PATH;?>vms/vms.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]><link href="<?php echo CSS_PATH;?>vms/ielt9.css" rel="stylesheet" type="text/css" /><![endif]--> 
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.tools_tabs.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		<?php $n=1;if(is_array(subcat($catid,0,0,$siteid))) foreach(subcat($catid,0,0,$siteid) AS $r) { ?>
$('#tab<?php echo $r['catid'];?>').tabs("div.pns<?php echo $r['catid'];?> > ul");
$('#tag<?php echo $r['catid'];?>').tabs("div.views<?php echo $r['catid'];?> > ul");
		<?php $n++;}unset($n); ?>
		$('#tag1').tabs("div.tabn1 > ul");
	})
</script>

<div class="clr ct idx">
<div class="clr">
  <div class="lyt_1">
    <div class="aream mFocus">
      <div class="mBoxL zt">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e7c206e146f10f20bde0288f368eb1e2&action=position&posid=14&order=listorder+DESC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder DESC','limit'=>'1',));}?>
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <dl class="boxVideo focusVideo">
          <dt>
            <div><a target="_blank" href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" style="WIDTH: 328px; HEIGHT: 250px"> </a></div>
          </dt>
		
          <dd class="title">
            <h3><span class="ico_zt"></span><a target="_blank" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h3>
          </dd>
          <dd class="text"><?php echo str_cut($r[description],82);?><a target="_blank" href="<?php echo $r['url'];?>">视频详情</a>&gt;&gt;&nbsp;&nbsp;<a target="_blank" href="<?php echo $r['url'];?>">评论</a>&gt;&gt;</dd>
          <dd class="info"> <span class="show">播放:<cite><?php echo get_views('c-'.$CATEGORYS[$r[catid]][modelid].'-'.$r['id']);?></cite></span> <span class="review">评论:<cite><?php echo get_comments(id_encode("content_$r[catid]",$r[id],$siteid));?></cite></span> </dd>
        </dl>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
		
        <ul class="mNewsList">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb4e194d5f6e4cb9f8deab3c448a3a65&action=position&posid=15&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder DESC','limit'=>'4',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<li>[<?php echo $CATEGORYS[$r['catid']]['catname'];?>]<a target="_blank" href="<?php echo $r['url'];?>" <?php echo title_style($r[style]);?>><?php echo str_cut($r[title],82);?></a></li>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
        </ul>
      </div>
      <div class="mBoxR">
        <ul class="mVideoList">
		
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=67054e7ad7222b84cc1e93bedb1de068&action=position&posid=16&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder DESC','limit'=>'6',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<?php $video_info = get_vid($r[id], $r[catid], $isspecial = 0);?> 
<li class="ico_dj">
<dl class="boxVideo boxV_1">
<dt> <span class="time"><?php echo dataformat($video_info['timelen']);?></span> 

<span class="plus">
<a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $r['id'];?>&catid=<?php echo $r['catid'];?>&title=<?php echo $r['title'];?>" class="j" title='<?php echo $r['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $r['catid'];?>" contentid="<?php echo $r['id'];?>"></a>

</span> 

<a title="<?php echo $r['title'];?>" target="show_v" href="<?php echo $r['url'];?>" class="pic"><img alt="<?php echo $r['title'];?>" src="<?php echo $r['thumb'];?>"></a> 
</dt>
<dd class="text"><span></span><a target="show_v" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></dd>
<dd class="info"> <span class="show">播放:<cite><?php echo get_views('c-'.$CATEGORYS[$r[catid]][modelid].'-'.$r['id']);?></cite></span> <span class="review">评论:<cite><?php echo get_comments(id_encode("content_$r[catid]",$r[id],$siteid));?></cite></span> </dd>
</dl>
</li>

<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
  
        </ul>
      </div>
      <div class="clear"></div>
    </div>
     
  	
<?php $n=1;if(is_array(subcat($catid,0,0,$siteid))) foreach(subcat($catid,0,0,$siteid) AS $r) { ?>
<?php $num++?>	
	
    <div class="box3">
    	<div class="nav">
			<span class="more"><a href="<?php echo $r['url'];?>" target="_blank">更多>></a></span>
        	<h5><?php echo $r['catname'];?></h5>
    		<ul class="ulin" id="tab<?php echo $r['catid'];?>">
                <li><a href="#">今日热点</a></li>
                <li><a href="#">最新视频</a></li>
            </ul>
    	</div>
        <div class="clr bct">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c1ebef7952e988e1bd8eb4c1bcd15c6&action=position&posid=10&catid=%24r%5Bcatid%5D&order=listorder+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'10','catid'=>$r[catid],'order'=>'listorder DESC','limit'=>'1',));}?>
        	<div class="l w200">
			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
            	<div class="hots">
                	<div class="clr"><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="200" height="155"></a></div>
                    <h5><a href="<?php echo $v['url'];?>" target="_blank"><?php echo str_cut($v[title],26);?></a></h5>
                    <p><?php echo str_cut($v[description],56);?> <a href="<?php echo $v['url'];?>#comment_iframe" target="_blank">评论>></a></p>
                </div>
		
			<?php $n++;}unset($n); ?>	
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <ul class="uli">	
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7bbf5c6bf797f628305c2231b723339f&action=position&posid=10&catid=%24r%5Bcatid%5D&order=listorder+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'10','catid'=>$r[catid],'order'=>'listorder DESC','limit'=>'4',));}?>
			<?php $n=1;if(is_array($info)) foreach($info AS $r) { ?>
			<?php if($n!=1) { ?>
				<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],32);?></a></li>
				<?php } ?>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
  
            </ul>
				
            </div>

			<!--本栏目最新视频-->
			<div class="wp pns<?php echo $r['catid'];?>">
            <ul class="clr wp col3">
			 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=279a611e36c928bff96991f6a4e2c03a&action=lists&catid=%24r%5Bcatid%5D&num=6&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'6',));}?>
			 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			 <!-- 获取视频详细信息 -->
			 <?php $video_info = get_vid($v[id], $v[catid], $isspecial = 0);?> 
                  <li>
                  <div class="w120">
                      <div class="imgbox"><span class="tm"><?php echo dataformat($video_info['timelen']);?></span>
					  <a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $v['id'];?>&catid=<?php echo $v['catid'];?>&title=<?php echo $v['title'];?>" class="j" title='<?php echo $v['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $v['catid'];?>" contentid="<?php echo $v['id'];?>"></a>
					  
					  <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="120" height="75"></a></div>
                      <div class="lh21"><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],30,false);?></a></div>
                      <div class="sz"><span class="shows">播放数：<cite><?php echo get_views('c-'.$CATEGORYS[$v[catid]][modelid].'-'.$v['id']);?></cite></span><span>评论：<cite><?php echo get_comments(id_encode("content_$v[catid]",$v[id],$siteid));?></cite></span></div>
                  </div>
                </li> 
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
			<!--本栏目今日热点-->
            <ul class="clr wp col3 hidden">
			 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=265a438182a2022c742aba7029a91506&action=hits&catid=%24r%5Bcatid%5D&num=6&order=dayviews+DESC&return=info&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$info = $content_tag->hits(array('catid'=>$r[catid],'order'=>'dayviews DESC','limit'=>'6',));}?>
			 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
			 <?php $contentid = explode("-",$v[hitsid]);$video_info = get_vid($contentid[2], $v[catid], $isspecial = 0);?> 
                  <li>
                  <div class="w120">
                      <div class="imgbox"><span class="tm"><?php echo dataformat($video_info['timelen']);?></span>
					  <a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=playlist&contentid=<?php echo $v['id'];?>&catid=<?php echo $v['catid'];?>&title=<?php echo $v['title'];?>" class="j" title='<?php echo $v['title'];?>' onclick="toggle(this);return false;" id="abc<?php echo random(8);?>" catid="<?php echo $v['catid'];?>" contentid="<?php echo $v['id'];?>"></a>
					  
					  <a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="120" height="75"></a></div>
                      <div class="lh21"><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v[title],18,false);?></a></div>
                      <div class="sz"><span class="shows">播放数：<cite><?php echo get_views('c-'.$CATEGORYS[$v[catid]][modelid].'-'.$v['id']);?></cite></span><span>评论：<cite><?php echo get_comments(id_encode("content_$v[catid]",$v[id],$siteid));?></cite></span></div>
                  </div>
                </li> 
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
			</div>
			
        </div>
    </div>
	<?php if($num%2 ==0) { ?>
 	<div class="ad">
	<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad660x90.gif" width="660" height="90"></a>
	</div>
	<?php } ?>
<?php $n++;}unset($n); ?>	
	
	
    
</div>
  <div class="lyt_2">
  	<div class="r1 tg">
	<!-- 右顶广告 -->
	<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad280x66.gif"></a>
	</div>
    <div class="box0">
    	<div class="nav"><h5>精彩推荐</h5></div>
        <div class="bct mg10 jctj">
<?php $category_nums = count(subcat($catid,0,0,$siteid));$num=0;?> 
<?php $n=1;if(is_array(subcat($catid,0,0,$siteid))) foreach(subcat($catid,0,0,$siteid) AS $r) { ?> 
<?php $num++?>	
<?php if($num<4) { ?>
        	<h6><?php echo $r['catname'];?></h6>
        	<div class="clr <?php if($num == $category_nums) { ?>last<?php } ?>">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b03d7d9ee47ac623a4dc2bc286ea8ccf&action=position&posid=17&catid=%24r%5Bcatid%5D&order=listorder+DESC&num=5&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$info = $content_tag->position(array('posid'=>'17','catid'=>$r[catid],'order'=>'listorder DESC','limit'=>'5',));}?>
			<?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
				<?php if($n==1) { ?>
					<div class="l"><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><img src="<?php echo $v['thumb'];?>" width="101" height="78"></a></div>
					<ul class="lh20">
					<?php } else { ?>
					<li><a href="<?php echo $v['url'];?>" title="<?php echo $v['title'];?>" target="_blank"><?php echo str_cut($v['title'],22,false);?></a></li>
				<?php } ?>
			<?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
			  
                 
               </ul>
            </div> 
<?php } ?>
<?php $n++;}unset($n); ?>			
			
        </div>
    </div>
    <div class="r2 tg">
	
<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad280x66.gif"></a>
 
	</div>
     <div class="mgt10 box2">
    	<div class="nav tag3">
        	<ul class="clr col3"  id="tag1">
                <li><a href="#" class="ac">热点</a></li>
                <li><a href="#">评论</a></li>
                <li><a href="#">关注</a></li>
            </ul>
        </div>
        <div class="bct tabn1">
        	<ul class="uli4 mg10">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3ce0c92850ba1ffd809f82f2a88eb97a&action=hits&catid=%24catid&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php $ids = explode('-',$r[hitsid]); $pic = get_pic($ids[2],$catid);?>
 				<?php if($n==1) { ?>
					<li class="p_r">
						  <div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $pic['thumb'];?>" width="106" height="75"></a></div>
						  <div class="lh18"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],22,false);?></a></div>
						  <div><?php echo str_cut($r[description],44);?></div>
					</li>
				<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],36,false);?></a></li>
				<?php } ?>			
 			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
		  
        	<ul class="uli4 mg10 hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=439bfdf2138fac86caeeba55cba3c565&action=bang&num=%24catid&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array()).'439bfdf2138fac86caeeba55cba3c565');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'20',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php if($n==1) { ?>
					<li class="p_r">
						  <div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
						  <div class="lh18"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></div>
						  <div><?php echo str_cut($r[description],45,false);?></div>
					</li>
				<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],36,false);?></a></li>
				<?php } ?>			
 			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
		  
        <ul class="uli4 mg10 hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3ce0c92850ba1ffd809f82f2a88eb97a&action=hits&catid=%24catid&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<?php if($n==1) { ?>
					<li class="p_r">
						  <div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
						  <div class="lh18"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo $r['title'];?></a></div>
						  <div><?php echo str_cut($r[description],45,false);?></div>
					</li>
				<?php } else { ?>
					<li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],36,false);?></a></li>
				<?php } ?>			
 			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
          </ul>
		  
		  
        </div>
    </div>
	
	
	
	 <div class="mgt10 box2">
    	<div class="nav tag3">
        	<ul class="clr col3">
                <li><a href="#" class="ac">视频专辑列表</a></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="bct">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=a68c11194dcb6bf22057827840036a51&action=lists&siteid=%24siteid&listorder=2&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'listorder'=>'2','limit'=>'6',));}?>
		<ul class="uli4 mg10">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php if($n==1) { ?>
			<li class="p_r">
			<div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" ><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
			<div class="lh18"><a href="<?php echo $r['url'];?>" ><?php echo str_cut($r[title],22,false);?></a></div>
			<div><?php echo str_cut($r[title],22,false);?></div>
			</li>
			<?php } else { ?>
			<li><a href="<?php echo $r['url'];?>" ><?php echo str_cut($r[title],22,false);?></a></li> 
			<?php } ?>
		<?php $n++;}unset($n); ?>	
		</ul>
		
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
        </div>
    </div>
	
	
	
	
	
<?php $n=1;if(is_array(subcat($catid,0,0,$siteid))) foreach(subcat($catid,0,0,$siteid) AS $r) { ?>
<?php $num++?>	
    <div class="mgt10 box2">
    	<div class="nav tag3"  id="tag<?php echo $r['catid'];?>">
        	<ul class="clr col3">
                <li><a href="#" class="ac"><?php echo $r['catname'];?></a></li>
                <li><a href="#">周排行</a></li>
                <li><a href="#">月排行</a></li>
            </ul>
        </div>
        <div class="bct views<?php echo $r['catid'];?>">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=00ab598114275f2b3a1e3bb96ccb127d&action=hits&catid=%24r%5Bcatid%5D&num=8&order=dayviews+DESC&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$r[catid],'order'=>'dayviews DESC','limit'=>'8',));}?>
		<ul class="uli4 mg10">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php if($n==1) { ?>
			<li class="p_r">
			<div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
			<div class="lh18"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],22,false);?></a></div>
			<div><?php echo str_cut($r[title],26,false);?></div>
			</li>
			<?php } else { ?>
			<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,false);?></a></li> 
			<?php } ?>
		<?php $n++;}unset($n); ?>	
		</ul>
		
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ace60979cf33ceb2aaffb19bcf0b9ec7&action=hits&catid=%24r%5Bcatid%5D&num=8&order=weekviews+DESC&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$r[catid],'order'=>'weekviews DESC','limit'=>'8',));}?>
		
		<ul class="uli4 mg10 hidden">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php if($n==1) { ?>
			<li class="p_r">
			<div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
			<div class="lh18"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],22,false);?></a></div>
			<div><?php echo str_cut($r[title],26,false);?></div>
			</li>
			<?php } else { ?>
			<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],38,false);?></a></li> 
			<?php } ?>
		<?php $n++;}unset($n); ?>	
		</ul>
		
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	  
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=54e72d182da5e8fbdb0c88b7e07f1acb&action=hits&catid=%24r%5Bcatid%5D&num=8&order=monthviews+DESC&cache=0\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$r[catid],'order'=>'monthviews DESC','limit'=>'8',));}?>
		
		<ul class="uli4 mg10 hidden">
		<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<?php if($n==1) { ?>
			<li class="p_r">
			<div class="l"><span class="bs">1</span><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><img src="<?php echo $r['thumb'];?>" width="106" height="75"></a></div>
			<div class="lh18"><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],22,false);?></a></div>
			<div><?php echo str_cut($r[title],26,false);?></div>
			</li>
			<?php } else { ?>
			<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],38,false);?></a></li> 
			<?php } ?>	
		<?php $n++;}unset($n); ?>
		</ul>
	
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
        </div>
    </div>
<?php $n++;}unset($n); ?>	
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	
    <div class="ad">
	
	<a href="http://www.phpcms.cn" title="随机广告位，欢迎访问PHPCMS.CN"><img src="http://www.phpcms.cn/statics/images/video/ad280x66.gif"></a>
	</div>
  
   
  </div>
  </div> 

<script type="text/javascript">
$(function(){
	delcookie('player_list'); 
	ChangStatus();
})

/*
*改变加入清单的图片事件和图片显示
*/
function ChangStatus(){
	var player_list ;
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
			if(list_array.length>20){
				alert('你已经添加20个播放列表，无法增加更多！');
				return false;
			}
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