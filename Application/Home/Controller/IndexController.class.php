<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {

  public function index(){
      $this->assign('username',session('username'));
      $this->display();
  }

  public function user_add(){
      $this->display();
  }

}