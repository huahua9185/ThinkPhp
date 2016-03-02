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
      $this->assign('userinfo',$user->getUser());
      $this->display();
  }

    /**
     * 添加用户
     */
  public function user_add(){
    if(IS_POST){
        $user=D('Members');
        if(!$user->create()){
           $this->error($user->getError(),U('Home/Index/user_add'));
        }
        else{
            $id=$user->add();
            $this->success('添加成功',U('Home/Index/user'));
        }


    }
      $this->display();
  }
}