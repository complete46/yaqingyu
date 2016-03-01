<?php
//check1
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\Realization;

class ItemController extends Controller {
    public function index($wish_id=52){
    	header("Content-type: text/html; charset=utf-8");
    	if(session('?user'))
    		$this->assign('user',I('session.user'));  	
    	$des = M('Description');   	
    	$items = $des->where("wish_id=$wish_id")->select();
    	if($items){
    		$items[0]['id']=$items[0]['wish_id'];
    		$items[0]['wish_id']="/Uploads/".$items[0]['wish_id'].".llk";   		
    		$image = new \Think\Image();
    		$image->open(".".$items[0]['wish_id']);
    		$w = $image->width();
    		$h = $image->height();
    		if($w>$h){
    			$h=300/$w*$h;
    			$w=300;
    		}
    		else{
    			$w=300/$h*$w;
    			$h=300;
    		}
    		$items[0]['w']=$w."px";
    		$items[0]['h']=$h."px";
    		$this->assign('arr',$items[0]);
    		
    		$rlz = M('realization');    		
    		$count = $rlz->where("wish_id=$wish_id")->count();
    		$Page = new \Think\Page($count,3);
    		$Page -> rollPage=3;
    		$Page -> setConfig('header','共%TOTAL_ROW%条');
    		$Page -> setConfig('first','第一页');
    		$Page -> setConfig('last','第%TOTAL_PAGE%页');
    		$Page -> setConfig('prev','<<上一页');
    		$Page -> setConfig('next','下一页>>');
    		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');
    		$show = $Page->show();   			
    		$replies = $rlz->where("wish_id=$wish_id")->limit($Page->firstRow.','.$Page->listRows)->select();   		
    		if($replies){   			
    			$this->assign('page',$show);
    			$this->assign('data', $replies);
    		}     		
    		$this->display();
    	}
    	else{
    		redirect(U('Home/Index'));
    	}    		   	
    }
    
    public function	delete(){   	
    }
    
    public function	reply(){
    	if(IS_POST) {
    		if(session('?user')){
	    		$this->assign('user',session('user'));
	    		$data[author]=I('session.user');
		    	$rlz = D('realization');
		    	$data[reply]=I('post.reply');
		    	$data[author]=I('session.user');
		    	$data[wish_id]=I('post.wish_id');		    	
		    	$data1 = $rlz->create($data);
		    	$result= $rlz->add($data1);
		    	if($result){
		    		echo '0';
		    	}
		    	else{
		    		echo '1';
		    	}
	    	}
	    	else{
	    		echo '2';
    		}
    	}
    	else{
    		$this->display('Home/Index');
    	}
    }
}