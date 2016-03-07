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
      $this->assign('userinfo',$user->userInfo());
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

    /**
     * @param 用户ID
     */
    public function user_del($id){
        $id=I('get.id');
        if($id==1){
            $this->error('管理员不能删除！！！');
        }
        $user=D('members');
        $result=$user->relation('auth_group_access')->delete($id);
        if($result){
            $this->success('删除成功',U('Home/Index/user'));
        }
        else{
            $this->error('删除失败',U('Home/Index/user'));
        }

    }
    public function user_edit($id=1){
        $user=D('members');
        $id=I('get.id');
        if(IS_POST){
            if(!$user->create()){
                exit($user->getError());
            }else{
                $map['id']=I('post.id');
                var_dump($user->data());
                $a=$user->relation('auth_group_access')->field('nickname,password,remark,status,group_id')->where($map)
                    ->save();
                var_dump($a);

            }
        }
        $result=$user->userInfo($id);
        $a=$result[0];
        $this->assign('info',$a);
        $this->assign('glist',$user->getGroup());
        $this->display();
    }
}