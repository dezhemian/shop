<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Model;
use Home\Model\UserModel;
use Think\Image;
use Think\Verify;
use Think\Upload;
class UserController extends Controller {
   public function login(){
   	  $this->display();
   }
   public function register(){
   	$user = new\Model\UserModel();
   	if(!empty($_POST)){
   		$z=$user->create();
   		if(!$z){
   			var_dump($user->getError());
   		}
   		$ret = $user->add();
   		if($ret){
   			$this->success('注册成功',U('Index/index'));
   		}else{
   			$this->error('注册失败',U(Index/index));
   		}
   	}else{
   		
   	  }
   	  $this->display();
   	}
  
    function _empty() {
   	echo "<img src='".IMG_URL.'222.jpg'."' alt=''>";
   }
   
}