<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content", "header"); ?>
<?php include template("zsask", "header"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/public_qty.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>themes/css/answerList.css"/>
<!-- 问答列表页 begin-->

<div class="answerBox">
	<div class="answerSmallBox">
		<!--小问题列表开始-->
		<div class="detailHome_qty">
			<div class="homeFont">首页<span><a href="<?php echo ASK_PATH;?>">&gt热点提问</a></span></div>
		</div>
		<!--小问题列表结束-->
		<!--问题列表开始-->
		<div class="healthBox_qty">
			<div class="healthImgBox_qty">
				<img src="<?php echo CSS_PATH;?>themes/image/store_qty.png"/>
			</div>
			<div class="healthRightBox_qty">
				<div class="healthTopFont_qty">
					热点<span>提问</span>
				</div>
				<div class="healthBottomFont_qty">
					HOT<span>QUESTIONS</span>
				</div>
			</div>
		</div>
		<!--问题结束-->
		<ul class="twzq-nav">
            <li class="active" id="bgc_2"><a href="javascript:;" onclick="choice(2)">全部</a></li>
            <li id="bgc_0"><a href="javascript:;" onclick="choice(0)">待解决</a></li>
            <li id="bgc_99"><a href="javascript:;" onclick="choice(99)">已解决</a></li>
            <li id="bgc_1"><a href="javascript:;" onclick="choice(1)">零回答</a></li>
        </ul>
		<?php $where = get_catids($catid); $stus = intval($_GET[s]);?>
		<?php if($stus ==1) { ?>
		<?php $where .= ' AND status=0';?>
		
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=02b74e085f40c5da08f71c99b7d8ae55&sql=SELECT+qid+FROM+dyw_ask_answer+WHERE+zid%3D0+AND+status%3D0+GROUP+BY+qid&return=qids\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT qid FROM dyw_ask_answer WHERE zid=0 AND status=0 GROUP BY qid LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$qids = $a;unset($a);?>
		<?php $n=1;if(is_array($qids)) foreach($qids AS $_q) { ?>
		<?php $qidarr[] = $_q[qid]?>
		<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php if($qidarr) { ?>
		<?php $where .= ' AND '.to_sqls($qidarr, '', 'qid NOT');?>
		<?php } ?>
		<?php } elseif ($stus !=2) { ?>
		<?php $where .= ' AND status='.$stus;?>
		<?php } else { ?>
		<?php $where .=' AND status !=1'?>
		<?php } ?>
		
		<?php if(!empty($_GET['keywords'])) { ?>
		<?php $keywords = new_addslashes(safe_replace(urldecode($_GET['keywords']))); ?>
		<?php $where .= " AND question LIKE '%$keywords%'"; ?>
		<?php } ?>
		
		<!--问题列表开始-->
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=01553b3d787868d9bd20ea91268a15c1&sql=SELECT+%2A+FROM+dyw_ask_question+WHERE+%24where+ORDER+BY+qid+DESC&num=25&page=%24page&return=arrq\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 25;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (SELECT * FROM dyw_ask_question WHERE $where ORDER BY qid DESC) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("SELECT * FROM dyw_ask_question WHERE $where ORDER BY qid DESC LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$arrq = $a;unset($a);?>
		<div class="answerListBox_qty">
			<ul class="answerSmalllistBox_qty">
			    <?php $n=1;if(is_array($arrq)) foreach($arrq AS $r) { ?>
				<li>
					<div class="answerLeft_qty">
						<div class="answer_qty">
							<a href="<?php if($r[url]) { ?><?php echo $r['url'];?><?php } else { ?><?php echo ASK_SHOW;?><?php echo $r['qid'];?><?php } ?>"><h4>Q：<?php echo str_cut($r[question],70,"");?><span>&nbsp;&nbsp;<?php echo date("Y-m-d h:i:s",$r[addtime]);?></span></h4></a>
						</div>
						<?php if(get_answers($r[qid])) { ?>
						<?php $n=1;if(is_array(get_answers($r[qid]))) foreach(get_answers($r[qid]) AS $a) { ?>
						<div class="answer_qty">
							<h4 class="color_qty">A：</h4>
							<p><?php echo $a['content'];?></p>
						</div>
						
						<div class="anony_qty">
							<span class="anonyBox_qty">匿名提问</span>
							<span class="anonyR_qty"><?php echo $a['a_username'];?>的回答</span>
						</div>
						<?php $n++;}unset($n); ?>
						<?php } else { ?>
						<div class="answer_qty">
							<h4 class="color_qty">A：暂无最佳回答，如果要查看所有回答请查看&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php if($r[url]) { ?><?php echo $r['url'];?><?php } else { ?><?php echo ASK_SHOW;?><?php echo $r['qid'];?><?php } ?>">问题详情</a></h4>
							<p></p>
						</div>
						<?php } ?>
					</div>
					<div class="answerRight_qty">
						<a href="">
							<img src="<?php echo CSS_PATH;?>themes/image/doctor_qty.png"/>
							<span class="doctor_qty">欢迎您&nbsp;&nbsp;<span>预约+</span></span>
						</a>
					</div>
				</li>
				<?php $n++;}unset($n); ?>
			</ul>
		</div>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<!--问题列表结束-->
		<!--分页开始-->
		<div id="pages">
	    <?php echo $pages;?>	
		</div>
		<!--分页结束-->
	</div>
</div>






<!-- 问答列表页 end -->


<script type="text/javascript">
	function choice(status) {
		window.location = '<?php echo ASK_LIST;?><?php echo $catid;?>&s='+ status;
	}
	
	$('.twzq-nav li').removeClass('active');
	$('#bgc_<?php echo $stus;?>').addClass('active');
	var total_q = $('#pages .a1:eq(0)').html();
	if (!total_q) {
		$('#total_q').html('<?php echo count($arrq);?>条');
	}else {
		$('#total_q').html(total_q);
	}

	function srch() {
		var keywords = $('#keywords').val();
		window.location = window.location +'&keywords='+ keywords;
	}
	
</script>


<?php include template("content", "footer"); ?>