<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "header"); ?>
<?php include template("zsask", "header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/answerList.css"/>
<!-- 问答详情页 begin -->
<div class="answerBox">
	<div class="answerSmallBox">
		<!--小问题列表开始-->
		<div class="detailHome_qty">
			<div class="homeFont">首页<span><a href="<?php echo ASK_PATH;?>">&gt热点提问</a></span></div>
		</div>
		<!--小问题列表结束-->
		<div class="answerListBox_qty" style="padding-bottom: 10px;">
		    <form name="qform" id="qform" action="" method="post">
			<ul class="answerSmalllistBox_qty">
				<li style="height:auto">
					<div class="answerLeft_qty">
						<div class="answer_qty">
							<a href="<?php if($r[url]) { ?><?php echo $r['url'];?><?php } else { ?><?php echo ASK_SHOW;?><?php echo $r['qid'];?><?php } ?>"><h4>Q：<?php echo $info['question'];?><span><?php echo date('Y-m-d',$info[addtime]);?></span></h4></a>
						</div>
						<?php if($info[content]) { ?>
						<div class="answer_qty">
							<h4 class="color_qty">补充：</h4>
							<p>
							<?php echo $info['content'];?>
							</p>
						</div>
						<?php } ?>
						<?php if(empty($info[aid])) { ?>
						<div class="answer_qty">
							<h4 class="color_qty">回答：</h4>
							<p>
							<textarea name="answer" id="answer_id" style="width:600px;height:100px;"></textarea>
							</p>
						</div>
						<div class="answer_qty">
							<h4 class="color_qty"></h4>
							<p>
							<input type="hidden" name="qid" id="qid_id" value="<?php echo $info['qid'];?>">
							<input type="submit" name="dosubmit" value=" 提交答案 " class="doctor_qty" style="position: inherit;color: #fff;" />
							</p>
						</div>
						
						
						<?php } ?>
						<div class="anony_qty">
							<span class="anonyBox_qty"><?php if($info[userid]) { ?><?php echo get_nickname($info[userid]);?><?php } else { ?><?php echo substr($info[ip], 0, -4);?>.***<?php } ?>的提问</span>
							<span class="anonyR_qty">浏览：<span id="hits"></span> 次</span>
						</div>
						<?php if(!empty($info[aid])) { ?>
						<div class="answer_qty">
							<h4 class="color_qty">此问题已经解决！</h4>
							<p>
							
							</p>
						</div>
						<?php } ?>
						
					</div>
					<div class="answerRight_qty">
						<a href="">
							<img src="<?php echo CSS_PATH;?>themes/image/doctor_qty.png"/>
							<span class="doctor_qty">张医师&nbsp;&nbsp;<span>预约+</span></span>
						</a>
					</div>
					
					<?php $n=1;if(is_array($ts_answer)) foreach($ts_answer AS $key=>$a) { ?>
					<div class="answerLeft_qty">
						<div class="answer_qty">
							<h4 class="color_qty">A<?php echo sprintf("%02d", $key+1);?>:&nbsp;&nbsp;</h4>
							<p>
							<?php echo $a['content'];?>
							</p>
						</div>
					
						<div class="anony_qty">
								<span class="anonyBox_qty"><?php if($a[userid]) { ?><?php echo get_nickname($a[userid]);?><?php } else { ?><?php echo substr($a[ip], 0, -4);?>.***<?php } ?>的回答</span>
								<span class="anonyR_qty"><?php echo date("Y-m-d",$a[addtime]);?></span>
					    </div> 
					    <div class="answer_qty">
							<h4 class="color_qty"></h4>
							<p>
							<?php $answer_arr = add_answer($a[aid], $info[qid]);?>
							<?php if($answer_arr) { ?>
							<?php $n=1;if(is_array($answer_arr)) foreach($answer_arr AS $val) { ?>
							<?php if($val[userid] ==$info[userid]) { ?><span class="zask">追问：</span><?php echo $val['content'];?><br />
							<?php } else { ?><span class="zask">回答：</span><?php echo $val['content'];?><br />
							<?php } ?>
							<?php $n++;}unset($n); ?>
							<?php if($a[userid] == $this->userid && $info[status] ==0) { ?>
							<input type="button" name="btn2" value="回答追问" class="doctor_qty" onclick="addAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')" style="position: inherit;color: #fff;">
							<?php } ?><?php } ?>
							</p>

							
							<p class="colp">
							<?php if(($this->userid == $info[userid] && $info[status] ==0) || $this->admin) { ?>
							<span><input type="button" name="btn1" value="选为满意答案" class="doctor_qty" onclick="javascript:window.location='<?php echo APP_PATH;?>index.php?m=zsask&a=agreeAnswer&aid=<?php echo $a['aid'];?>&qid=<?php echo $info['qid'];?>'" style="position: inherit;color: #fff;"> &nbsp;&nbsp;&nbsp;</span>
							<?php } ?>
							<?php if($this->userid == $info[userid] && $info[status] ==0) { ?>
							<span>
							<input type="button" name="btn2" value="继续追问" class="doctor_qty" onclick="addAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')" style="position: inherit;color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;</span>
							<?php } ?>
							<?php if($this->userid) { ?>
							<?php if(($a[userid] == $this->userid || $this->IP == $info[ip]) && $info[status] ==0) { ?>
							<span><input type="button" name="btn4" value="完善答案" class="doctor_qty" onclick="editAnswer('<?php echo $a['aid'];?>', '<?php echo $info['qid'];?>')" style="position: inherit;color: #fff;"> &nbsp;&nbsp;&nbsp;</span>
							<?php } ?>
							<?php } ?>
						</div>
				    </div>
					<?php $n++;}unset($n); ?>
				</li>
			</ul>
			</form>
		</div>
	</div>
</div>

<!-- 问答详情页 end -->




<script type="text/javascript">
	function addAnswer(aid, qid) {
		window.top.art.dialog({id:'zq', lock:false}).close();
		window.top.art.dialog({title:'追问', lock:false, id:'zq', iframe:'<?php echo APP_PATH;?>index.php?m=zsask&a=addAnswer&aid='+ aid +'&qid='+ qid, width:'600', height:'150'}, 
				function(){var d = window.top.art.dialog({id:'zq'}).data.iframe;
				var form = d.document.getElementById('dosubmit');form.click();return false;}, 
				function(){window.top.art.dialog({id:'zq', lock:false}).close()
		});
	}
	
	function commentAnswer(aid, qid, f, u) {
		$('.cinfo_'+ aid).show('slow');
		window.top.art.dialog({id:'zq', lock:false}).close();
		if (u) {
			$('#comment_'+ aid).val('回复 -> '+ $('#u_'+u).html() +'： ');
		}
		if (f =="1") {
			var comment = $('#comment_'+ aid).val();
			if (!comment) alert('请输入评语！');
			$.post( '<?php echo APP_PATH;?>index.php?m=zsask&a=commentAnswer&aid='+ aid +'&qid='+ qid, {comment:comment, dosubmit:'1'},
					
				function (data) {
					if (data.cid) {
						var htmls = '<tr><td>'
							+ '<a href="#" target="_blank" style="color:blue" id="u_'+data.cid+'">'
							+ '<?php if($this->userid) { ?><?php echo get_nickname($this->userid, "username");?><?php } else { ?><?php echo ip();?><?php } ?></a> | '
							+ data.time+'</td> '
							+ '<td align="right">'
						//	+ '<input type="button" name="btn3" value="回复" class="button" onclick="commentAnswer(\'<?php echo $a['aid'];?>\', \'<?php echo $info['qid'];?>\')">'
							+ '<a href="javascript:;" onclick="commentAnswer(\''+ aid +'\', \''+ qid +'\', 0, \''+data.cid+'\')">回复</a>'
							+ '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
							+ '</td></tr>'
							+ '<tr><td colspan="2">'
							+ '<div class="cm">'
							+ comment
							+ '</div>'
							+ '</td></tr>';
						$('#cmlist_'+ aid).prepend(htmls);
						$('#comment_'+ aid).val('');
					}
				}, 'json'
			);
		}
	}
	
	function editAnswer(aid, qid) {
		window.top.art.dialog({id:'zq', lock:false}).close();
		window.top.art.dialog({title:'完善答案', lock:false, id:'zq', iframe:'<?php echo APP_PATH;?>index.php?m=zsask&a=editAnswer&aid='+ aid +'&qid='+ qid, width:'600', height:'150'}, 
				function(){var d = window.top.art.dialog({id:'zq'}).data.iframe;
				var form = d.document.getElementById('dosubmit');form.click();return false;}, 
				function(){window.top.art.dialog({id:'zq', lock:false}).close()
		});
	}

<?php if(param::get_cookie('admin_username')) { ?>

	function delComment(aid, cid, obj) {
		$.get('?m=zsask&c=zsask&a=delcomment&pc_hash=<?php echo session_code("", "", 1);?>&aid='+ aid +'&cid='+ cid, function(data) {
			if (data =="1") {
				$(obj).parent().parent().fadeOut('slow');
				$('#comt_'+ cid).fadeOut('slow');
			}
		});
	}
	
	function delAnswer(aid, qid, obj) {
		$.get('?m=zsask&c=zsask&a=delanswer&pc_hash=<?php echo session_code("", "", 1);?>&aid='+ aid +'&qid='+ qid, function(data) {
			if (data =="1") {
				$(obj).parent().parent().fadeOut('slow');
			}
		});
	}
<?php } ?>	
</script>

<script type="text/javascript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $info['qid'];?>&module=zsask"></script>
<?php include template("content", "footer"); ?>