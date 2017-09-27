<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function _empty(){
		echo "<img src='".IMG_URL.'222.jpg'."' alt=''>";;
	}
}