<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/appoint_qty.css"/>
<!-- 预约体验 begin -->
		<div class="appointBox_qty">
			<div class="appointSmallBox_qty">
				<!--小预约体验开始-->
				<div class="detailHome_qty">
					<div class="homeFont">首页<span>&gt <?php echo $name;?></span></div>
				</div>
				<!--小预约体验结束-->
				<!--预约体验立即预约开始-->
				    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=950cc6e65fb40c78b47c16bedc260f76&action=position&posid=13&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'13','order'=>'listorder DESC','limit'=>'4',));}?>
				    <?php if($data) { ?>
					<div class="appointImgBox_qty">
						<ul>
						    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li>
								<a href="index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=1">
								    <?php if($r[thumb]) { ?>
									<img src="<?php echo $r['thumb'];?>" alt="$r[title]" title="<?php echo $r['title'];?>" width="290"/>
									<?php } else { ?>
									<img src="<?php echo IMG_PATH;?>nopic.gif" alt="$r[title]" title="<?php echo $r['title'];?>" width="290"/>
									<?php } ?>
									<div class="hotBox_qty">
										<p>-<?php echo str_cut($r[title],17,'');?>-</p>
										<div><span>立即预约</span></div>
									</div>
								</a>
							</li>
						    <?php $n++;}unset($n); ?>
						</ul>
					</div>
					<?php } ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<!--预约体验立即预约结束-->
				<!--预约体验介绍开始-->
					<div class="appointIntroduce_qty">
						<!--预约体验左边开始-->
							<div class="appointLeft_qty">
								<div class="appointSmallLeft_qty">
									<h2>预约体验介绍</h2>
									<p> 山西太常生物科技有限公司是一家专业从事骨病调养，并以此为基础综合改善各类慢性病及亚健康症状的健康调理机构，是国内骨病个性化调养的开创者和领导者。</p>
									<span>请记住我们的网址：<a href="">www.sxtaichang.com</a> </span>
									<h3>预约填单</h3>
									<div class="tableBox_qty">
										<form action="?m=formguide&c=index&a=show&formid=<?php echo $formid;?>" method="post">
											<table border="0" cellspacing="0" cellpadding="0">
												<tr>
													<td>名字</td>
													<td>预约项目</td>
												</tr>
												
												<tr>
													<td>
														<input type="text" name="info[name]" id="" value="" />
													</td>
													<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
												    <?php if($info[name] == '预约项目') { ?>
													<td>
														 <?php echo $info['form'];?>
													</td>
													
												</tr>
												<?php } ?>
												<?php if($info[name] == '联系电话') { ?>
												<tr>
													<td colspan="2"><?php echo $info['name'];?></td>
												</tr>
												<tr>
													<td colspan="2">
														<input type="text" name="info[phone]" id="" value="" class="input_qty"/>
													</td>
												</tr>
												<?php } ?>
												
												<?php $n++;}unset($n); ?>
												<tr>
													<td colspan="2">选择门店</td>
												</tr>
												<tr>
													<td colspan="2">
														<select name="info[ex_store]" class="input_qty">
															<?php $n=1;if(is_array($areo_stores)) foreach($areo_stores AS $r) { ?>
														    <option value="<?php echo $r['title'];?>"><?php echo $r['title'];?></option>
														    <?php $n++;}unset($n); ?>
														</select>
													</td>
												</tr>
												<?php if($info[name] == '预约备注') { ?>
												<tr>
													<td colspan="2"><?php echo $info['name'];?></td>
												</tr>
												<tr>
													<td colspan="2">
														<textarea name="info[remarks]" rows="4" cols="" class="input_qty"></textarea>
													</td>
												</tr>
												<?php } ?>
											</table>
											<div class="sumbit_qty">
												<input type="submit" name="dosubmit" id="dosubmit" value="提交" />
											</div>
										</form>
									</div>
								</div>
							</div>
						<!--预约体验左边结束-->
						<!--预约体验右边开始-->
						<div class="appointRight_qty">
							<h2>预约须知</h2>
							<ul>
								<li>
									<h5>1.空腹</h5>
							<p>
								食物可直接影响餐后血糖，所以测空腹血糖应该禁食至少8小时以上。如果
早上7点抽血化验空腹血糖，则前一天晚上10点前就不能再吃任何点心、
水果和饮料了。但这段时间可以少量喝些白开水。最好晚上8点钟之前结束
晚餐，晚餐后不再吃零食。血糖不稳定，睡前使用胰岛素的糖尿病患者可
按照往常习惯加餐即可。
							</p>
								</li>
								<li>
									<h5>2.忌饮酒</h5>
							<p>
								酒精可使血流加速、心跳加快，甚至诱发心律不齐或心率失常。因此，做
心电图检查前24小时内一定要禁酒，以免造成误诊。饮酒后做脑血流图会
出现脑血流加快，造成血管梗阻的假象。
							</p>
								</li>
								<li>
									<h5>3.忌辛辣</h5>
							<p>
								酒精可使血流加速、心跳加快，甚至诱发心律不齐或心率失常。因此，做
心电图检查前24小时内一定要禁酒，以免造成误诊。饮酒后做脑血流图会
出现脑血流加快，造成血管梗阻的假象。
							</p>
								</li>
							</ul>
							<h1>预约流程</h1>
							<div class="proces_qty">
								<ul>
									<li>
										<p><span>1</span>&nbsp;&nbsp;心跳加快，甚至诱发心律不齐或心率失常</p>
									</li>
									<li>
										<p><span>2</span>&nbsp;&nbsp;心跳加快，甚至诱发心律不齐或心率失常</p>
									</li>
								</ul>
							</div>
						</div>
						<!--预约体验右边结束-->
					</div>
				<!--预约体验介绍结束-->
			</div>
		</div>

<!-- 预约体验 end -->


<div class="main">
	
    <div class="col-auto">
        <div class="box">
            <h5 class="title-2">频道总排行</h5>
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58900d29a2d86f6669bfff23ba8fcaf2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'58900d29a2d86f6669bfff23ba8fcaf2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title], 28, '');?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">频道本月排行</h5>
            <ul class="content rank">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d09a3bdd996817c252fccd081b70bebc&action=hits&catid=%24catid&num=10&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'d09a3bdd996817c252fccd081b70bebc');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<li><span><?php echo number_format($r[monthviews]);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
<!--
	function show_ajax(obj) {
		var keywords = $(obj).text();
		var offset = $(obj).offset();
		var jsonitem = '';
		$.getJSON("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_list&type=keyword&modelid=<?php echo $modelid;?>&id=<?php echo $id;?>&keywords="+encodeURIComponent(keywords),
				function(data){
				var j = 1;
				var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
				string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
				if(data!=0) {
				  $.each(data, function(i,item){
					j = i+1;
					jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";
					
				  });
					string += jsonitem;
				} else {
					string += '没有找到相关的信息！';
				}
					string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";		
					$(obj).after(string);
					$('.key-float').mouseover(
						function (){
							$(this).siblings().css({"z-index":0})
							$(this).css({"z-index":1001});
						}
					)
					$(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
				});
	}

	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+title+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}

$(function(){
  $('#Article .content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');    
})
//-->
</script>

<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>
<?php include template("content","footer"); ?>