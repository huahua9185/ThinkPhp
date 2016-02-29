<?php
namespace Home\Controller;
use Think\Controller;
use Think\Auth;
class CommonController extends Controller {
    public function _initialize(){
        $AUTH=new Auth();
        if(!$AUTH->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('uid'))){
            //超级管理员，拥有全部权限
            if(session('uid')==C('ADMINISTRATOR')){
                return true;
            }
            if(!session('uid')){
                $this->error('尚未登录，请登录',U('Home/Login/index'));
            }else{
                $this->error('没有权限');
            }

        }
    }
}