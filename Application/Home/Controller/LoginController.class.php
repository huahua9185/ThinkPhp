<?php
/**
 * Created by PhpStorm.
 * User: huahua
 * Date: 2016/2/27
 * Time: 21:32
 */
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller{
    /**
     * 登录方法，以user表的name为条件，与post数据对比找出user，判断密码相符后将id写入session，供auth判断权限。
     */
    public function index(){
        if(session('?uid')){
            redirect(U('Home/Index/index'));
        }
        if(IS_POST){
            $map['name']=I('post.username');
            $pass=md5(I('post.password'));
            $members=M('members');
            $result=$members->where($map)->find();
            if(!$result){
                $this->error('账号不存在！！！',U('Home/Login/index'));
            }
            if($pass!=$result['password']){
                print_r($pass);
                print_r($result['password']);
                $this->error('密码错误',U('Home/Login/index'));
            }
            if($result['status']==0){
                $this->error('账号已禁用',U('Home/Login/index'));
            }
            session(array('name'=>'session_id','expire'=>3600));
            session('uid',$result['id']);
            session('username',$result['name']);
            session('nickname',$result['nickname']);
            redirect(U('Home/Index/index'),1,'登录成功，跳转中');

        }
        $this->display();
    }
    public function quit(){
        session('[destroy]'); // 销毁session
        redirect(U('Home/Login/index'),1,'成功退出');
    }
}