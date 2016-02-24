<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this->display();

    }
    //显示用户
    public  function  users(){
        $user=M('user');
        $result=$user->select();
        //var_dump($result);
        $this->assign('list',$result);
        $this->display('');


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
            var_dump($_POST);
          //前台post的数据username,password,confirm_password,nickname,email,type
            if(I('post.username')==null){
                $this->error('用户名不能为空',U('Home/Index/users_add'));
            }
            if(I('post.password')==null||I('post.confirm_password')==null){
                $this->error('密码不能为空',U('Home/Index/users_add'));
            }
            if(I('post.password')!=I('post.confirm.password')){
                    $this->success('两次输入的密码不一致',U('Home/Index/users_add'));
                }
        }

        $this->display();
    }
}