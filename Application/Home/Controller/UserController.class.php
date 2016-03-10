<?php
namespace Home\Controller;
header("Content-Type:text/html; charset=utf8");//命名空间后面
use Think\Controller;
class UserController extends CommonController {

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
            if(!$user->create($_POST,2)){
                exit($user->getError());
            }else{
                $user->auth_group_access=array(
                    'group_id'=>I('post.group_id'),
                );
                if($user->relation('auth_group_access')->save()){
                    $this->success('修改成功',U('Home/Index/user'));
                }else{
                    $this->error('修改失败',U('Home/Index/user'));
                }


            }
        }
        $result=$user->userInfo($id);
        $a=$result[0];
        $this->assign('info',$a);
        $this->assign('glist',$user->getGroup());
        $this->display();
    }
    /**
     * 用户组管理
     */
    public function group(){
        $glist=D('auth_group');
        $this->assign('glist',$glist->select());
        $this->display();
    }
    /**
     * 用户组编辑
     */
    public function group_edit($id=false){
        $group=D('auth_group');
        if(IS_POST){
            if($group->create()){
                //dump($group->data());
                $group->save();
                $this->success('修改成功',U('Home/User/group'));
            }else{
                $this->error('修改失败',U('Home/User/group'));
            }
        }
        $id=I('get.id');
        if($id){
            $glist=$group->getRule($id);
            dump($glist);
            $result=$group->find($id);
            $this->assign('glist',$glist);
            $this->assign('group',$result);
            $this->display();
        }
        else{
            $this->error('参数错误',U('Home/User/group'));
        }
    }
    /**
     * 添加用户组
     */
    public function group_add(){
        $rlist=D('AuthGroup');
        if(IS_POST){
           if($rlist->create()){
               $rlist->add();
               $this->success('添加成功',U('Home/User/group'));
           }else{
               $this->error('添加失败',U('Home/User/group'));
           }

        }
        $glist=$rlist->table('think_auth_rule')->field('id,title')->select();
        $this->assign('glist',$glist);
        $this->display();
    }
}