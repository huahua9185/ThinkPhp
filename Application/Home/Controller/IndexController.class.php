<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

  public function index(){
      $this->assign('username',session('username'));
      $this->display();
  }

  public function user(){
      $user=M('members');
      $result=$user->select();
      $this->assign('userinfo',$result);
      $this->display();
  }
  public function user_add(){
      $user=D('Members');
      $a=$user->create();
      print_r($a);
      $this->display();
  }
}