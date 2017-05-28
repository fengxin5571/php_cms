<?php
defined('IN_PHPCMS') or exit('No permission resources.');
define('CACHE_MODEL_PATH',PHPCMS_PATH.'caches'.DIRECTORY_SEPARATOR.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);

class index {
	private $db, $m_db, $M;
	function __construct() {
		$this->db = pc_base::load_model('sitemodel_model');
		$this->m_db = pc_base::load_model('sitemodel_field_model');
		$this->M = new_html_special_chars(getcache('formguide', 'commons'));
		$this->siteid = intval($_GET[siteid]) ? intval($_GET[siteid]) : get_siteid();
		$this->M = $this->M[$this->siteid];
		$this->_ip_area = pc_base::load_sys_class('ip_area');//引入ip获取地区类
		$this->_city = $this->_ip_area->getcity(ip());
	}
	
	/**
	 * 表单向导首页
	 */
	public function index() {
		$siteid = $this->siteid;
		$SEO = seo($this->siteid, '', L('formguide_list'));
		$page = max(intval($_GET['page']), 1);
		$r = $this->db->get_one(array('siteid'=>$this->siteid, 'type'=>3, 'disabled'=>0), 'COUNT(`modelid`) AS sum');
		$total = $r['sum'];
		$pages = pages($total, $page, 20);
		$offset = ($page-1)*20;
		$datas = $this->db->select(array('siteid'=>$this->siteid, 'type'=>3, 'disabled'=>0), 'modelid, name, addtime', $offset.',20', '`modelid` DESC');
		include template('formguide', 'index');
	}
	
	/**
	 * 表单展示
	 */
	public function show() {
		if (!isset($_GET['formid']) || empty($_GET['formid'])) {
			$_GET['action'] ? exit : showmessage(L('form_no_exist'), HTTP_REFERER);
		}
		$siteid = $_GET['siteid'] ? intval($_GET['siteid']) : 1;
		$formid = intval($_GET['formid']);
		$r = $this->db->get_one(array('modelid'=>$formid, 'siteid'=>$siteid, 'disabled'=>0), 'tablename, setting');
		if (!$r) {
			$_GET['action'] ? exit : showmessage(L('form_no_exist'), HTTP_REFERER);
		}
		$setting = string2array($r['setting']);
		if ($setting['enabletime']) {
			if ($setting['starttime']>SYS_TIME || ($setting['endtime']+3600*24)<SYS_TIME) {
				$_GET['action'] ? exit : showmessage(L('form_expired'), APP_PATH.'index.php?m=formguide&c=index&a=index');
			}
		}
		$userid = param::get_cookie('_userid');
		if ($setting['allowunreg']==0 && !$userid && $_GET['action']!='js') showmessage(L('please_login_in'), APP_PATH.'index.php?m=member&c=index&a=login&forward='.urlencode(HTTP_REFERER));
		if (isset($_POST['dosubmit'])) {//是否为提交
			$tablename = 'form_'.$r['tablename'];
			$this->m_db->change_table($tablename);
			$data = array();
			require CACHE_MODEL_PATH.'formguide_input.class.php';
			$formguide_input = new formguide_input($formid);
			$data = new_addslashes($_POST['info']);
			$data = new_html_special_chars($data);
			$data = $formguide_input->get($data);
			$data['userid'] = $userid;
			$data['username'] = param::get_cookie('_username');
			$data['datetime'] = SYS_TIME;
			$data['ip'] = ip();
			$data['ex_store'] = $_POST[info][ex_store];
			$dataid = $this->m_db->insert($data, true);
			if ($dataid) {
				if ($setting['sendmail']) {
					pc_base::load_sys_func('mail');
					$mails = explode(',', $setting['mails']);
					if (is_array($mails)) {
						foreach ($mails as $m) {
							sendmail($m, L('tips'), $this->M['mailmessage']);
						}
					}
				}
				$this->db->update(array('items'=>'+=1'), array('modelid'=>$formid, 'siteid'=>$this->siteid));
			}
			$msg=$formid ==31 ? L('done_experience'):L('thanks');//判断表单是否未预约体验
			showmessage($msg, APP_PATH);
		} else {
			if ($setting['allowunreg']==0 && !$userid && $_GET['action']=='js') {
				$no_allowed = 1;
			}
			pc_base::load_sys_class('form', '', '');
			$f_info = $this->db->get_one(array('modelid'=>$formid, 'siteid'=>$this->siteid));
			extract($f_info);
			$tablename = 'form_'.$r['tablename'];
			$this->m_db->change_table($tablename);
			$ip = ip();
			$where = array();
			if ($userid) $where = array('userid'=>$userid);
			else $where = array('ip'=>$ip);
			$re = $this->m_db->get_one($where, 'datetime');
			$setting = string2array($setting);
			if($formid == '31')//如果是预约体验表单
			{
			    if (($setting['allowmultisubmit']==0 && $re['datetime']) || ((SYS_TIME-$re['datetime'])<$this->M['interval']*60)) {
			        $_GET['action'] ? exit : showmessage(L('had_experience'),APP_PATH.'index.php?m=member&siteid=1');
			    }
			    $region_id=141;
			    $_city = $this->_city[city]?$this->_city[city]:'太原';
			    if($_city){//如果城市不为空去数据库查询相应的地区id
			        $linkge_model=pc_base::load_model('linkage_model');//创建地区模型
			        $city_info=$linkge_model->get_one("name like '%$_city%'");//获取ip所对应的地区信息
			        if($city_info[linkageid]){
			            $region_id = $city_info[linkageid];
			        }
			    }
			    $store_db=pc_base::load_model('content_model');
			    $store_db->change_table('store');
			    $areo_stores=$store_db->select('region='.$region_id);
			}else{
			    if (($setting['allowmultisubmit']==0 && $re['datetime']) || ((SYS_TIME-$re['datetime'])<$this->M['interval']*60)) {
			        $_GET['action'] ? exit : showmessage(L('had_participate'),HTTP_REFERER);
			    }
			}
			require CACHE_MODEL_PATH.'formguide_form.class.php';
			$formguide_form = new formguide_form($formid, $no_allowed);
			$forminfos_data = $formguide_form->get();
			$SEO = seo($this->siteid, L('formguide'), $name);
			if (isset($_GET['action']) && $_GET['action']=='js') {
				if(!function_exists('ob_gzhandler')) ob_clean();
				ob_start();
			}

			$template = ($_GET['action']=='js') ? $js_template : $show_template;
			include template('formguide', $template, $default_style);
			if (isset($_GET['action']) && $_GET['action']=='js') {
				$data=ob_get_contents();
				ob_clean();
				exit(format_js($data));
			}
		}
	}
}
?>