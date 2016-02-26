<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this->display();

    }
    //显示用户
    //判断用户组
    private  function  check_group($id){
        //这个方法主要是通过ID，读取相关用户的信息。如果id为空，则读取全部用户（用于显示用户列表），如果传入的ID不为空，则显示该id对应的用户相关信息（用于修改用户信息）.
        if(empty($id)){
            $map=0;
        }else{$map['rbac_user.id']=$id;}
        $group=M('role_user');
        $userBelong=$group->join('left join rbac_role ON rbac_role_user.role_id=rbac_role.id')->join('right join rbac_user ON rbac_user.id=rbac_role_user.user_id ')->order('rbac_user.id asc')->where($map)->select();
        return $userBelong;
    }
    //显示用户列表
    public  function  users(){
        $result=$this->check_group();
        //var_dump($result);

        $this->assign('list',$result);
        $this->display('');


    }
    //判断用户名是否重复
    private function check_account($att){
        $user=M('user');
        $map['account']=$att;
        $user_count=$user->where($map)->count('id');
        return $user_count;

    }
    //列出用户组，无传入值，返回值为用户组ID及名称
    private function group()
    {
        //获取用户组，供前台select列表使用和group使用
        $grouplist = M('role');
        $result = $grouplist->order('id asc')->select();
        return $result;
    }
    //增加用户
    public  function  users_add(){
        //增加用户
        //首先对提交的数据进行判断
        if(IS_POST){
            //var_dump($_POST);
          //前台post的数据account,password,confirm_password,nickname,email,type
            if(I('post.account')==null){
                $this->error('用户名不能为空',U('Home/Index/users_add'));
            }
            if(I('post.password')==null||I('post.confirm_password')==null){
                $this->error('密码不能为空',U('Home/Index/users_add'));
            }
            if(I('post.password')!=I('post.confirm_password')){
                $this->error('密码校验不一致，请重新输入',U('Home/Index/users_add'));
                }
            //检测用户是否存在，为真表示存在
            if($this->check_account(I('post.account'))==true){
                $this->error('用户名已存在，请重新输入',U('Home/Index/users_add'));
            };
            //实例化user表，创建数据，写入用户信息
            $user=M('user');
            $role=M('role_user');
            if($user->create()){
                //对密码进行md5加密存储
                $user->password=md5(I('post.password'));
                $user->status='1';
                $user->create_time=strtotime('now');
                $result=$user->add();
                //创建role表对象，写入type_id
                $role->create();
                $role->type_id=I('post.type_id');
                $role->user_id=$result;
                $role->add();
                $this->success('删除成功',U('Home/Index/users'));
            }
        }
        $this->assign('group',$this->group());
       $this->display();
    }
    //删除用户
    public  function  user_delete($id=null){
        if (empty($id)){
            $this->error('请输入正确的参数',U('Home/Index/users'));
        }
        $id=I('get.id');
        $user=M('user');
        $role=M('role_user');
        $map['user_id']=$id;
        if($user->delete($id)){
            $role->where($map)->delete();
            $this->success('删除成功',U('Home/Index/users'));
        } else{
            $this->error("删除失败",U('Home/Index/users'));
        };
    }
    public  function  user_edit($id=null){
        if(empty($id)){
            $this->error('请输入正确的参数',U('Home/Index/users'));}
        if(IS_POST){
            //var_dump($_POST);
            $user=M('user');
            $role=M('role_user');
            $data=I('post.');
            $data['role_id']=I('post.role_id');
            //$data['user_id']=I('post.id');
            if($data['status']==''){
                $data['status']=0;
            }
            if($user->create($data)&&$role->create($data)){
                $user->update_time=strtotime('now');
                $user->password=md5($data['password']);
                $user->where("id=$id")->save();
                $role->where("user_id=$id")->save();
                $this->success('修改成功',U('Home/Index/users'));
            };
            $role->create($data);
            print_r($a);
            print_r($b);
            //$this->success('修改成功',U('Home/Index/users'));
        }
        //var_dump($this->group());
        //var_dump($this->check_group($id));
        $this->assign('group',$this->group());
        $this->assign('list',$this->check_group($id));
        $this->display();
    }
    //权限管理
    //显示用户组
    public function gmanage(){
        $result=$this->group();
        //print_r($result);
        $this->assign('list',$result);
        $this->display();

    }
    public function group_add(){
        if(IS_POST){
            if(empty(I('post.name'))||empty(I('post.pid'))){
                $this->error('组名和PID不能为空',U('Home/Index/group_add'));
            }
            if(!is_numeric(I('post.pid'))){
                $this->error('PID必须为数字类型',U('Home/Index/group_add'));
            }

            $role=M('role');
            if($role->create()){
                $role->status=1;
                $role->add();
            }

        }
        $this->display();

    }

}