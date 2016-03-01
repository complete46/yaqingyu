<?php
//check1
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\User;

class SregisterController extends Controller {
    public function index(){
    	if(session('?user')){
    		$this->assign('user',I('session.user'));
    		redirect(U('Home/logout'));
    	}
    	else
    		$this->display();
    }
    
    public function register(){
    	if(IS_POST){
	    	$user = D('Userstudent');
	    	$data['name'] = I('post.username');
	    	$data['password'] = I('post.password');
	    	$data['psw2'] = I('post.password2');
	    	$data['email'] = I('post.email');
	    	$data['university'] = I('post.university');
	    	if ($data1=$user->create($data)){
	    		if($user->add($data1)){
	    			session('user', $data['email']);
   					session('identity', "student");
	    			redirect(U('Sreserve/index'));
	    		}
	    		else{
	    			$error=$user->getError();
	    			$this->assign('message','注册失败');
	    			$this->assign('title1','注册失败');
	    			$this->assign('pagename','注册页面');
	    			$this->assign('data',$error);
	    			$this->error('注册失败！','index',3);		
	    		}
	    	}
	    	else{
	    		$error=$user->getError(); 
	    		$this->assign('message','注册失败');
	    		$this->assign('title1','注册失败');
	    		$this->assign('pagename','注册页面');
	    		$this->assign('data',$error);
	    		$this->error('注册失败！', 'index',3);		
	    	} 
    	}
    	else{
    		$this->display('index');  		
    	}	    	
    }
/*    
    public function checkname() {
    	if (IS_POST) {
	    	$user = D('User');
	    	$data['username'] = I('post.username');
	    	if (!$user->create ($data)) {
	    		$error= $user->getError();
	    		echo ($error);
	    	} else {
	    		echo 0;
	    	}   
    	}else{
    		$this->display('index');  		
    	}	 
    }
    
    public function checkemail() {
    	if (IS_POST) {
	    	$user = D('User');
	    	$data['email'] = I('post.email');
	    	if (!$user->create ($data)) {
	    		$error= $user->getError();
	    		echo ($error);
	    	} else {
	    		echo 0;
	    	} 
    	}else{
    		$this->display('index');  		
    	}	 
    }
    
    public function checkpsw1() {
    	if (IS_POST) {
	    	$user = D('User');
	    	$data['passwd'] = I('post.psw1');
	    	if (!$user->create ($data)) {
	    		$error= $user->getError();
	    		echo ($error);
	    	} else {
	    		echo 0;
	    	}
    	}else{
    		$this->display('index');  		
    	}	 
    }
	    	
    public function checkpsw2() {
    	if (IS_POST) {
	    	$user = D('User');
	    	$data['passwd'] = I('post.psw1');
	    	$data['psw2'] = I('post.psw2');
	    	if (!$user->create ($data)) {
	    		$error= $user->getError();
	    		echo ($error);
	    	} else {
	    		echo 0;
	    	}
    	}else{
    		$this->display('index');  		
    	}
    }
    
    public function beforesubmit() {
    	if (IS_POST) {   		
    		$user = D('User');
	    	$data['username'] = I('post.username');
	   		$data['passwd'] = I('post.psw1');
	   		$data['psw2'] = I('post.psw2');
	   		$data['email'] = I('post.email');    
	   		if ($user->create($data)) {
    			echo 0;
	    	} else {
	    		$error= $user->getError();
	    		echo $error;
    		}    	
    	}
    	else{
	    	$this->display('index');
	    }
    } 
 */  
}