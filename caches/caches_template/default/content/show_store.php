<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/store_qty.css"/>
<!-- 门店详情页 begin -->
<div class="storeBox_qty">
			<div class="storeSmallBox_qty">
				<!--小门店详情开始-->
				<div class="storeHome_qty">
					<div class="homeFont">首页<span>&gt<?php echo catpos($catid);?><?php echo $title;?></span></div>
				</div>
				<!--小门店详情结束-->
				<!--显示所在门面开始-->
				<div class="storeWhere_qty">
					<div class="storeImgLeftBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/ditu_qty_03.png"/>
					</div>
					<div class="storeFontRight_qty">
						所在店面：<span><?php echo $title;?></span>
					</div>
				</div>
				<!--显示所在门面结束-->
				<!--门店介绍开始-->
				<div class="healthBox_qty">
					<div class="healthImgBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
					</div>
					<div class="healthRightBox_qty">
						<div class="healthTopFont_qty">
							门店<span>介绍</span>
						</div>
						<div class="healthBottomFont_qty">
							STO&nbsp;<span>RES</span>&nbsp;<span>ARE</span>&nbsp;<span>INTRODUCED</span>
						</div>
					</div>
				</div>
				<!--门店介绍结束-->
				<!--门店介绍banner开始-->
				<div class="storeBannerBox_qty">
					<div class="storeBannerSmallBox_qty">
						<div class="storeBannerLeftBox_qty">
							<div class="storeLeftSmallBox_qty">
								<h5><?php echo $title;?></h5>
								<div class="timeBox_qty">开店时间: <span><?php echo date("Y-m-d",$store_time);?></span></div>
								<p><?php echo $content;?></p>
							</div>
						</div>
						<div class="storeRightImgBox_qty">
							<img src="<?php echo thumb($thumb,537,344);?>"/>
						</div>
						<ul class="storeRightSmallBox_qty">
						    <?php $n=1;if(is_array($store_imgs)) foreach($store_imgs AS $r) { ?>
							<li>
								<img src="<?php echo thumb($r[url],172,122);?>" width='172' height=122''/>
							</li>
							<?php $n++;}unset($n); ?>
						</ul>
					</div>
					
				</div>
				<!--门店介绍banner结束-->
				<!--小健康用药开始-->
				<div class="healthBox_qty">
					<div class="healthImgBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
					</div>
					<div class="healthRightBox_qty">
						<div class="healthTopFont_qty">
							健康用药<span>指导老师简介</span>
						</div>
						<div class="healthBottomFont_qty">
							INT<span>RODUCTION&nbsp;OF&nbsp;PHYSICIANS</span>
						</div>
					</div>
				</div>
				<!--小健康用药结束-->
				<!--健康用药开始-->
				<div class="healthBigBox_qty">
				    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=c198e4b9728d9eaaaa74432dea489d30&sql=SELECT+%2A+FROM+dyw_doctor+as+d%2Cdyw_doctor_data+as+dd+WHERE+d.id%3Ddd.id+and+dd.store+%3D%24id&num=12\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM dyw_doctor as d,dyw_doctor_data as dd WHERE d.id=dd.id and dd.store =$id LIMIT 12");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?> 
					<ul>
					
					    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li>
							<div class="imgBoxLeft_qty">
								<img src="<?php echo thumb($r[thumb],126,129);?>" width="126" height="129"/>
							</div>
							<div class="healthRight_qty">
								<div class="healthTopRight_qty">
									<div class="top_qty">
										<h4><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></h4>
										<p>电话：<span><?php echo $r['phone'];?></span></p>
									</div>
									<div class="top_qty">
										<h6><a href="">JON ZHANG</a></h6>
										<p><a href="">所在门店：<span><?php echo $title;?></span></a></p>
									</div>
									<div class="centerImgBox_qty"></div>
									<div class="bottomBox_qty">
										<div class="good_qty"><?php echo $r['aptitude'];?></div>
										<p>
											<?php echo str_cut($r[description],160,"");?>
										</p>
									</div>
									<div class="see_qty">
										<a href="<?php echo $r['url'];?>">查看详情</a>
									</div>
								</div>
							</div>
						</li>
					    <?php $n++;}unset($n); ?>
					</ul>
					<!--  <div class="change_qty"><span>换一批</span></div>-->
				</div>
				<!--健康用药结束-->
				
				<!--预约体检跑马车开始-->
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=450ae8156e03b9eb1468afff22c29126&action=position&posid=5&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'5','order'=>'listorder DESC','limit'=>'4',));}?>
				<?php if($data) { ?>
				<?php if($data) { ?>
				<div class="goods_for" style="padding-top: 20px;">
				    <div class="goods_for_tirle"></div>
				    <ul class="goods_for_con">
				        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				        <li class="goods_for_one">
				            <a href="<?php echo $r['url'];?>" class="goods_for_img">
				            <img src="<?php echo thumb($r[thumb],288,233);?>" alt="$r[title]" title='<?php echo $r['title'];?>' width='288' height='233'>
				            </a>
				            <div class="goods_for_name">
				                <span></span>
				                <span><?php echo str_cut($r[title],17,'');?></span>
				                <span></span>
				            </div>
				            <a href="<?php echo $r['url'];?>" class="goods_for_more">查看详情</a>
				        </li>
				        <?php $n++;}unset($n); ?>
				
				    </ul>
				    <div class="goods_forMore" ><a href="<?php echo $CATEGORYS['18']['url'];?>" style="color: #fff">更多</a></div>
				    <div class="goods_forME">TRADITIONAL NOURISHING</div>
				<?php } ?>
				</div>
				<?php } ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!--预约体检跑马车结束-->
				<!--咨询开始-->
				<div class="healthBox_qty">
					<div class="healthImgBox_qty">
						<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
					</div>
					<div class="healthRightBox_qty">
						<div class="healthTopFont_qty">
							咨询
						</div>
						<div class="healthBottomFont_qty">
							<span>ADVI </span>SO <span>RY</span>
						</div>
					</div>
				</div>
				<!--咨询结束-->
				<!--咨询大块开始-->
				<div class="conBigBox_qty">
					<div class="conLeftBox_qty">
						<div class="conSmallBox_qty">
							<div class="inputBox_qty">请输入您的问题</div>
							<div class="textBox_qty">
								<textarea name="" rows="4" cols="44"></textarea>
							</div>
							<div class="meeBox_qty">
								<span>立即提问</span>
							</div>
						</div>
					</div>
					<div class="conLeftBox_qty">
						<div class="conSmall_qty">
							<div class="answerBox_qty">
								<span class="cirle_qty"></span>
								他们问过
							</div>
							<div class="answer_qty">
								<span class="cirles_qty"></span>风湿骨病常见问题？
							</div>
							<div class="reply_qty">
								<span class="cirles_qty cir"></span>答：
							</div>
							<ul class="replyBox_qty">
								<li>1、面色差，脸色发黄，没有精神。</li>
								<li>2、不思饮食，食欲不振，有饱腹感。</li>
								<li>3、心跳加快，心慌。</li>
								<li>4、月经异常。产后风女性月经会出现带团、带黑、带白等现象，月经量异常，或多或少，严重者会出现必经。</li>
								<li>5、心情焦躁。心情焦躁不仅会出现在产前，产后的新妈妈也会难以自控，经常闹情绪，容易发火。</li>
							</ul>
							<div class="seeBox_qty">
								<a href="javascript:alert('正在开发中')">查看更多</a>
							</div>
						</div>
						
					</div>
				</div>
				<!--咨询大块结束-->
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				var imgW=$('.banner_qty li').width();
				var index=0;
//				var t=setInterval(move,2000)
				function move(){
					 $('.banner_qty').stop(true,true)
		             $('.banner_qty').animate({'marginLeft':-imgW},function(){
		           	 $('.banner_qty li:first').appendTo($('.banner_qty'))
		             $('.banner_qty').css({'marginLeft':0})
		           })
				}
				$('.rbtn_qty').click(function(){
					move();
				})
				$('.lbtn_qty').click(function(){
					 $('.banner_qty').stop(true,true)
					$('.banner_qty').animate({marginLeft:0});
					$('.banner_qty li:last').prependTo($('.banner_qty'))
					$('.banner_qty').css({marginLeft:-imgW});
				})
//				$('.storeMakeBox_qty').hover(function(){
//					clearInterval(t)
//				},function(){
//					t=setInterval(move,2000)
//				})
			})
		</script>

<!-- 门店详情页 end -->

<?php include template("content","footer"); ?>