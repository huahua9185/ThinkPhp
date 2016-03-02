<?php
/**
 * Created by PhpStorm.
 * User: cxzmj
 * Date: 2016/3/1
 * Time: 15:06
 */
namespace Home\Model;
use Think\Model;
class MembersModel extends Model{
	protected $_validate=array(
		//array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间])
		array('name','require','用户名必须填写',1),
		array('password','require','密码必须填写',1),
		array('repassword','require','密码重复必须填写',1),
		array('name','','用户名重复',0,'unique',1),
		array('repassword','password','确认密码不正确',0,'confirm')
	);
	protected $_auto=array(
		array('status','1'),
		array('password','md5',3,'function'),
		array('create_time','time',2,'function')
	);
}