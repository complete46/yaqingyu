<?php
//check1
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Think\Model\User;
class LoginController extends Controller {
    public function index(){
    	if(session('?user')){
    		$this->assign('user',I('session.user'));
    		redirect(U('Home/Index'));
    	}
    	else
    		$this->display();
    }

	public function login() {
  	 	if (IS_POST) {
    		$user = M('Userinvestor');
    		$user2 = M('Userstudent');
    		$data['email'] = I('post.email');
 //   		var_dump($user2->query("SELECT * FROM `brilliance_sreserve` INNER JOIN brilliance_university ON brilliance_sreserve.university = brilliance_university.u_num WHERE ( brilliance_sreserve.email='yu.yaqing@hotmail.com' "));
    		$data['password'] = md5(I('post.password'));  
    		if($user->where($data)->select()){    							
   				session('user', $data['email']);
   				session('identity', "investor");
    			redirect(U('Home/index'));				
    		}
    		else if($user2->where($data)->select()){    							
   				session('user', $data['email']);
   				session('identity', "student");
    			redirect(U('Home/index'));		
    		}
    		
	    	else{
	    		header("Content-type: text/html; charset=utf-8");
	   			$error="email或密码错误";
	   			echo $error;
	   		}
	   	}
	   	else{
	    	$this->display('index');
	    }
 	}
}
	

	


