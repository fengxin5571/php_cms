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
											<?php echo str_cut($p[description],397,"");?>
										</p>
									</div>
									<!--  <div class="studyBox_qty">
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
									</div>-->
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
						    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9fdab88ae193f636198e45d8cef2ff41&sql=SELECT+setting+FROM+dyw_poster+WHERE+spaceid+%3D+4+AND+type%3D%27images%27+AND+disabled%3D0+ORDER+BY+listorder+ASC&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT setting FROM dyw_poster WHERE spaceid = 4 AND type='images' AND disabled=0 ORDER BY listorder ASC LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>  
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
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3781d77fff365551139f0428cfc031d0&action=hits&catid=%24catid&num=3&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'3',));}?>
				<?php if($data) { ?>
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
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b670a59977be16f100126b226e453f19&action=hits&catid=22&num=4&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'22','order'=>'views DESC','limit'=>'4',));}?>
				<div class="videoBox_qty">
					<div class="videoFont_qty">.健康养生.</div>
					<div class="videoList_qty">
						<ul>
						 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<a href="<?php echo $r['url'];?>">
								    <?php if($r[thumb]) { ?>
						            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="285" height='266'>
						            <?php } else { ?>
						            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="285" height='266'>
						            <?php } ?>
									
									<div class="videoSmall_qty">
										<?php echo str_cut($r[title],25,"");?>
									</div>
								</a>
							</li>
						 <?php $n++;}unset($n); ?>
						</ul>
					</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=403fdec31f5814fde377464fbf78d007&action=hits&catid=24&num=4&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'24','order'=>'views DESC','limit'=>'4',));}?>
					<div class="videoFont_qty">.调养功效.</div>
					<div class="videoList_qty">
						<ul>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<a href="<?php echo $r['url'];?>">
								    <?php if($r[thumb]) { ?>
						            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="285" height='266'>
						            <?php } else { ?>
						            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="285" height='266'>
						            <?php } ?>
									
									<div class="videoSmall_qty">
										<?php echo str_cut($r[title],25,"");?>
									</div>
								</a>
							</li>
						<?php $n++;}unset($n); ?>	
						</ul>
					</div>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!--热门视频结束-->
				
				<!--小保健讲堂开始-->
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb64761acfce92a223c67d78a4111827&action=position&posid=17&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder DESC','limit'=>'8',));}?>
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
					<div class="healthRoomLeft_qty">
					<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=10"></script>
					</div>
					<div class="healthRoomRight_qty">
						<div class="healthRoomTop_qty">
						    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=07742b5caa2372030a731ca881939578&action=hits&catid=%24catid&num=2&order=views+asc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views asc','limit'=>'2',));}?>
							<ul>
							 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li>
									<div class="healthVideo_qty">
										<a href="<?php echo $r['url'];?>">
										<?php if($r[thumb]) { ?>
							            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="440" height='235'>
							            <?php } else { ?>
							            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="440" height='235'>
							            <?php } ?>
										</a>
									</div>
									<div class="heathRoomFont_qty">
										<span><?php echo str_cut($r[title],25,"");?></span>
										<div>
											<img src="<?php echo CSS_PATH;?>themes/image/eyes_qty_03.png"/>
											<?php echo $r['views'];?>
										</div>
									</div>
								</li>
							 <?php $n++;}unset($n); ?>	
							</ul>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<div class="healthRoomBottom_qty">
							<ul class="img_qty">
							    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li>
									<div class="healthRoomTops_qty">
										<a href="<?php echo $r['url'];?>">
										<?php if($r[thumb]) { ?>
							            <img src="<?php echo $r['thumb'];?>" alt="$r[title]" title='<?php echo $r['title'];?>' width="206" height='122'>
							            <?php } else { ?>
							            <img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="206" height='122'>
							            <?php } ?>
										</a>
									</div>
									<div class="healthRoomBs_qty"><?php echo str_cut($r[title],25,"");?></div>
								</li>
								<?php $n++;}unset($n); ?>
							</ul>
							<ul class="lrbtns_qty">
								<li class="lbtns_qty">&lt;</li>
								<li class="rbtns_qty">&gt;</li>
							</ul>
						</div>
					</div>
				</div>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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

<?php include template("content","footer"); ?> 