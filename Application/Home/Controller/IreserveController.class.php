<?php
//check1
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\User;

class IreserveController extends Controller {
    public function index(){
    	if(session('?user')){
    		if(session('identity')=="investor"){
    			$this->assign('user',I('session.user'));
    			$this->display();
    		}
    		else{
    			session(null);
    			redirect(U('Sregister/index'));
    		}
    	}
    	else{
    		redirect(U('Login/index'));
    	}
    }
    
    public function feedback(){
    	if(IS_POST){
	    	$user = D('Ireserve');
	    	$data['amount'] = I('post.amount');
	    	$data['email']=session('user'); 
	    	$data['university'] = I('post.university');
	    	if ($data1=$user->create($data)){
	    		if($user->add($data1))
	    			redirect(U('Myhomepage/index'));
	    		else{
	    			$error=$user->getError();
	    			$this->assign('message','预约失败');
	    			$this->assign('title1','预约失败');
	    			$this->assign('pagename','预约页面');
	    			$this->assign('data',$error);
	    			$this->error('预约失败！','index',3);		
	    		}
	    	}
	    	else{
	    		$error=$user->getError(); 
	    		$this->assign('message','预约失败');
	    		$this->assign('title1','预约失败');
	    		$this->assign('pagename','预约页面');
	    		$this->assign('data',$error);
	    		$this->error('预约失败！', 'index',3);		
	    	} 
    	}
    	else
    		$this->display('index');  		    	
    }
}