<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {


    //主页默认方法
  public function index(){
      $this->display();
  }


    //增加用户方法
  public function user_add(){
      $this->display();
  }
}