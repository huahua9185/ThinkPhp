<?php
namespace Home\Model;
use Think\Model\RelationModel;
class AuthGroupModel extends RelationModel{


	/**
	 * @return 返回authgroup表内rules字段内容被相应文本替换后的东西
	 */
	public function getRule($id){
		$group=M('auth_group');
		//$id=I('get.id');
		//获取规则列表
		$rule=array_column($this->table('think_auth_rule')->field('id,title')->select(),'title','id');
		//获取组规则列表
		//如果$id不为空，表示选择单个用户组信息
		if($id){
			$rules=$group->field('rules')->find($id);
			$vv=explode(",",$rules['rules']);
			foreach($vv as $key=>$value){
				//$value是权限代码
				foreach($rule as $kkk=>$vvv){
					if($value==$kkk){//如果规则列表里的id字段与转换后数组的字段相同，那么
						$vv[$key]=$vvv;
					}

				}
			}
			return $vv;
		}else{

			$rules=$group->field('rules')->select();
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
							}else{$vv[$key]="未定义";}
							$aa['rules']=implode(',',$vv);
						}
					}
				}
				array_replace($rules[$k],$aa);
				$rules[$k]=$aa;
			}
			return $rules;

		}

	}

}