<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this->display();

    }
    public  function  showuser(){
        $user=M('user');
        $result=$user->select();
        var_dump($result);
        $this->assign('list',$result);
        $this->display('show_user');


    }
}