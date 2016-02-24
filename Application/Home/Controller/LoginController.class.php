<?php
namespace Home\Controller;
use Think\Controller;
use Org\Util\Rbac;
class LoginController extends Controller {
    public function index(){
        if(IS_POST){
            if(empty($_POST['username'])) {
                $this->error('帐号错误！');
            }elseif (empty($_POST['password'])){
                $this->error('密码必须！');
            }
            //生成认证条件
            $map = array();
            // 支持使用绑定帐号登录
            $map['account'] = $_POST['username'];
            $map["status"] = array('gt',0);
            //使用用户名、密码和状态的方式进行认证
            $authInfo = RBAC::authenticate($map);
            if(false === $authInfo) {
                $this->error('帐号不存在或已禁用！');
            }else {
                if($authInfo['password'] != md5($_POST['password'])) {
                    $this->error('密码错误！');
                }
                $_SESSION[C('USER_AUTH_KEY')] =    $authInfo['id'];
                if($authInfo['account'] == C('ADMIN_AUTH_KEY')) {
                    $_SESSION['admin'] = true;
                }
                //保存登录信息
                $User =    M('User');
                $ip    = get_client_ip();
                $time =    time();
                $data = array();
                $data['id']    = $authInfo['id'];
                $data['last_login_time'] = $time;
                $data['login_count'] = array('exp','login_count+1');
                $data['last_login_ip'] = $ip;
                $User->save($data);
                // 缓存访问权限
                RBAC::saveAccessList();
                //var_dump($authInfo);
                //var_dump($_SESSION[C('ADMIN_AUTH_KEY')]);
                //var_dump(MODULE_NAME);
                $this->success('登录成功！', U('/'));
            }
        }else{
            $this->display();
        }
    }
    public function quit(){
        session(null);
        $this->success('成功退出','index');
    }
}