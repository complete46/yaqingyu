<?php
//check1
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	public function index(){   	
    	if(session('?user'))
    		$this->assign('user',I('session.user'));  	
    	$this->display();   	
	}  
}