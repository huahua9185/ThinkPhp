<?php
namespace Home\Controller;
header("Content-Type:text/html; charset=utf8");//命名空间后面
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
      $user=D('Members');
      $result=$user->relation(true)->select();
      foreach($result as $key=>$value){
          $result[$key]['title']=$result[$key][groups][0][title];
      }
      print_r($result);
      $this->assign('userinfo',$result);
      $this->display();
  }

    /**
     * 添加用户
     */
  public function user_add(){
    $user=D('Members');
    if(IS_POST){
        if(!$user->create()){
            exit($user->getError());
        }else{
            $id=$user->add();
            $data['uid']=$id;
            $data['group_id']=I('post.group_id');
            $user->table('think_auth_group_access')->field('uid,group_id')->data($data)->add();
            $this->success('添加成功',U('Home/Index/user'));

        }
    }
      $this->assign('glist',$user->getGroup());
      $this->display();
  }
}