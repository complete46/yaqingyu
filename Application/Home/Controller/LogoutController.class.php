<?php
//check1
namespace Home\Controller;
use Think\Controller;

class LogoutController extends Controller {
    public function index(){
    	session(null);   	
    	redirect(U('Home/Login/index'));
    }
}
	

	


