<?php

namespace Home\Controller;
use Think\Controller;

class StudentController extends Controller {
    public function index(){  	
    	if(session('?user')){
    		$this->assign('user',I('session.user'));
    		$this->display();
    	}
    	else{    		
    		$this->display();
    	}
    }  
}