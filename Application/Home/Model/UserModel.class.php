<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
//	protected $patchValidate = true;//输出所有错误
	protected $_validate = array(
		array('username', 'require', '用户名不得为空！'),
		array('email', 'require', '邮箱不得为空！'),
		array('passwd', 'require', '密码不得为空！'),				
		array('username', '', '该用户名已被注册！', 0, 'unique', 1),
		array('psw2', 'passwd', '两次输入密码不同', 0, 'confirm'),	
		array('username', 'length_username', '用户名长度不符！', 0, 'function'), 
		array('email', 'length_email', '邮箱长度不符！', 0, 'function'),
		array('passwd', 'length_psw', '密码长度不符！', 0, 'function'),
		array('username', 'valid_username', '用户名格式不正确！', 0, 'function'),
		array('email', 'valid_email', '邮箱格式不正确！', 0, 'function'),
		array('passwd', 'valid_psw', '密码格式不正确！', 0, 'function'),
	);
	protected $_auto = array(
			array('passwd', 'md5', 3, 'function'), 
			array('passwd', '', 2, 'ignore'),
			
	);
}
	