<?php
/**
 * Created by PhpStorm.
 * User: cxzmj
 * Date: 2016/3/1
 * Time: 15:06
 */
namespace Home\Model;
use Think\Model;
use Think\Model\RelationModel;
class AuthGroupAccessModel extends RelationModel{
	//关联模型
	protected $_link = array(
		'Members'=>array(
			'mapping_type'=>self::BELONGS_TO,
			'class_name'=>'Members',
			'foreign_key'=>'id',
			'as_fields'=>'name,password,nickname'
		),
		'Auth_group'=>array(
			'mapping_type'=>self::HAS_MANY,
			'class_name'=>'Auth_group',
			'foreign_key'=>'id',
		),
	);

}