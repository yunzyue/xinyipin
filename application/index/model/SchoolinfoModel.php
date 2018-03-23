<?php
namespace app\index\model;
use think\Model;

class SchoolinfoModel extends Model
{

	protected $table = 'stat_otherinfo';


	public function getcolumn($id)
	{

		$res = $this->where('DISTRICTID',$id)->column('SCHOOLID');

		return $res;
	}
}