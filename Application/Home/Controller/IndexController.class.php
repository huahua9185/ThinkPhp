<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this->display();

    }
    //显示用户
    //判断用户组
    public  function  check_group(){
        $group=M('role_user');
        $userBelong=$group->join('left join rbac_role ON rbac_role_user.role_id=rbac_role.id')->join('right join rbac_user ON rbac_user.id=rbac_role_user.user_id ')->order('rbac_user.id asc')->select();
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
    //增加用户
    public  function  users_add(){
        //获取用户组，供前台select列表使用
        $grouplist=M('role');
        $result=$grouplist->select();
        $this->assign('group',$result);
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
}