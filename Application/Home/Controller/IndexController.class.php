<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

  public function index(){
      $this->assign('username',session('username'));
      $this->display();
  }

    /**
     * 用户信息列表
     */
  public function user(){
      $user=D('members');
      $this->assign('userinfo',$user->relation(true)->select());
      $this->display();
  }

    /**
     * 添加用户
     */
  public function user_add(){
      $user=D('Members');
    if(IS_POST){

        }
      $this->assign('glist',$user->getGroup());
      $this->display();
  }
}