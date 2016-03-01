<?php
//check1
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\User;

class MyhomepageController extends Controller {
    public function index(){
    	if(session('?user')){
    		$this->assign('user',I('session.user'));
    		$user=I('session.user');
    		if(session('identity')=="investor"){
    			$this->assign('title','我的预约');
    			$reserve = M('Ireserve');
    			$result=$reserve
    			->where("email='$user'")
    			->select();
    			if($result){
    				$this->assign('data', $result);
    				$this->assign('no_reserve','');
    			}
    			else{
    				$this->assign('no_reserve','您没有任何预约');
    			}
    			$this->display();
    		}
    		else{
    			$this->assign('title','我的申请');
    			$reserve = M('Sreserve');  	 
    			$result=$reserve
    		    ->join('brilliance_university ON brilliance_sreserve.university = brilliance_university.u_num')
    		    ->where("brilliance_sreserve.email='$user'")
    			->select();
    			if($result){
    				$this->assign('data', $result);
    				$this->assign('no_reserve','');
    			}
    			else{
    				$this->assign('no_reserve','您没有任何申请');
    			}
    			$this->display();
    		}
    	}
    	else{
    		redirect(U('Login/index'));
    	}
    }
}