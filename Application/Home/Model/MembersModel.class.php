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
		array('name','','帐号名称已经存在！',0,'unique',1),
		array('repassword','password','确认密码不正确',0,'confirm')
	);
	protected $_auto=array(
		array('status','1'),
		array('password','md5',3,'function'),
		array('create_time',NOW_TIME,1),
		array('update_time',NOW_TIME,2)

	);

	/**获取用户列表
	 * @return mixed
	 */
	public function getUser($id){
		return $this->join('left join think_auth_group_access on
		think_members.id=think_auth_group_access.uid')->join('left join think_auth_group on think_auth_group_access
		.group_id=think_auth_group.id')
			->select();
	}
	public function  getGroup(){
		$group=M('auth_group');
		return $group->select();
	}
}