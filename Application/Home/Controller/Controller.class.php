<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
    	if(session('?user')){
    		$this->assign('user',session('user'));
    	}
    	$this->assign('title1','请登录');
    	$this->display();
    }
   
}