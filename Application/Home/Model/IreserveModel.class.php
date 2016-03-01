<?php
namespace Home\Model;
use Think\Model;
class User_investorModel extends Model {
//	protected $patchValidate = true;//输出所有错误
	protected $_validate = array(
		array('amount', 'require', '预约金额不得为空！'),
		array('email', 'require', '请先登录！'),
		array('amount', 'valid_amount', '预约金额格式不正确！', 0, 'function'),
		
	);
	protected $_auto = array(
		
	);
}
	