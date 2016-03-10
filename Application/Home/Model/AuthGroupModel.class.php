<?php
namespace Home\Model;
use Think\Model\RelationModel;
class AuthGroupModel extends RelationModel{
	public function getRule(){
		$group=M('auth_group');
		//获取规则列表
		$rule=array_column($this->table('think_auth_rule')->field('id,title')->select(),'title','id');
		//获取组规则列表
		$rules=$group->field('rules')->select();
		//$result=array_flip($rule);
		//print_r($result);
		dump($rules);
		foreach($rules as $k=>$v){
		//遍历出每个用户组
			foreach($v as $vk=>$vv){
				$vv=explode(",",$vv);//将每个组的权限字段转化为数组形式
				foreach($vv as $key=>$value){
					//$value是权限代码
					foreach($rule as $kkk=>$vvv){
						if($value==$kkk){//如果规则列表里的id字段与转换后数组的字段相同，那么
							$vv[$key]=$vvv;
						}
						$aa['rules']=implode(',',$vv);
					}
				}
			}
			array_replace($rules[$k],$aa);
			//dump($aa);
			$rules[$k]=$aa;
			echo '</br>';
		}
		dump($rules);
		//dump($rvtitle);
		//dump($rules);
		//dump($rvtitle);
		//return $rules;
	}

}