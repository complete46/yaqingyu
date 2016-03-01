<?php
namespace Home\Model;
use Think\Model;
class User_investorModel extends Model {
	protected $_validate = array(
		array('college', 'require', '大学不得为空！'),
		array('email', 'require', '请先登录！'),
		array('loan', 'require', '请填写贷款金额！'),	
		array('idcard', 'require', '身份证号不得为空！'),
		array('passport', 'require', '护照号不得为空！'),
		array('major', 'require', '请填写专业信息！'),		
		array('department', 'require', '请填写学院信息！'),
		array('enrollment_year', 'require', '请填写入学年份！'),		
		array('college', 'valid_number', '大学不得为空！', 0, 'function'),
		array('major', 'valid_major', '专业格式不正确！', 0, 'function'),
		array('department', 'valid_number', '请填写学院信息！', 0, 'function'),
		array('enrollment_year', 'valid_number', '请填写入学年份！', 0, 'function'),
		array('loan', 'valid_amount', '预约金额格式不正确！', 0, 'function'),
		array('idcard', 'valid_idcard', '身份证格式不正确！', 0, 'function'),
		array('passport', 'valid_passport', '护照格式不正确！', 0, 'function'),

	);
	protected $_auto = array(
		
	);
}
	