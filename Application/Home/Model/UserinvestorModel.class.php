<?php
namespace Home\Model;
use Think\Model;
class User_investorModel extends Model {
//	protected $patchValidate = true;//输出所有错误
	protected $_validate = array(
		array('name', 'require', '姓名不得为空！'),
		array('email', 'require', '邮箱不得为空！'),
		array('password', 'require', '密码不得为空！'),				
		array('email', '', '该邮箱已被注册！', 0, 'unique', 1),
		array('psw2', 'password', '两次输入密码不同', 0, 'confirm'),	
		array('name', 'valid_username', '姓名格式不正确！', 0, 'function'),
		array('email', 'valid_email', '邮箱格式不正确！', 0, 'function'),
		array('password', 'valid_psw', '密码格式不正确！', 0, 'function'),
	);
	protected $_auto = array(
			array('password', 'md5', 3, 'function'), 
			array('password', '', 2, 'ignore'),
			
	);
}
	