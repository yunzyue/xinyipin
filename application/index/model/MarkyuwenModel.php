<?php
namespace app\index\model;
use think\Model;

class MarkyuwenModel extends Model
{

	// 理2   文1

	protected $table = 'stat_papermark1';

	// 获取文科数量
	public function countwen()
	{

		$res1 = $this->where('KLDM','1')->count();
		$res2 = $this->where('KLDM','1')->where('ZF',0)->count();
		
		$res = $res1-$res2;	

		return $res;
	}

	// 获取理科数量
	public function countli()
	{

		$res1 = $this->where('KLDM','2')->count();
		$res2 = $this->where('KLDM','2')->where('ZF',0)->count();
		
		$res = $res1-$res2;
		return $res;
	}


	//获取理科语文区间数量值
	public function liqujian($f,$b)
	{
		if($f==0){
			$res1 = $this->where('KLDM','2')->where('ZF','>',$f)->count();
		}else{
			$res1 = $this->where('KLDM','2')->where('ZF','>=',$f)->count();
		}

		$res2 = $this->where('KLDM','2')->where('ZF','>=',$b)->count();
	
		$res = $res1-$res2;

		return $res;
	}


	//获取文科语文区间数量值
	public function wenqujian($f,$b)
	{
		if($f==0){
			$res1 = $this->where('KLDM','1')->where('ZF','>',$f)->count();
		}else{
			$res1 = $this->where('KLDM','1')->where('ZF','>=',$f)->count();
		}

		$res2 = $this->where('KLDM','1')->where('ZF','>=',$b)->count();
	
		$res = $res1-$res2;

		return $res;

	}

	//获取学校对应理科人数
	public function getschpersonli($schoolid)
	{

		$res = $this->where(['KLDM'=>'2','SCHOOLID'=>$schoolid])->count();

		return $res; 
	}

	//获取学校对应文科人数
	public function getschpersonwen($schoolid)
	{

		$res = $this->where(['KLDM'=>'1','SCHOOLID'=>$schoolid])->count();
		
		return $res; 

	}


	//获取学校对应理科成绩平均值
	public function getschavgli($schoolid)
	{
		$res = $this->where(['KLDM'=>'2','SCHOOLID'=>$schoolid])->avg('ZF');
		
		return $res; 

	}

	//获取学校对应文科成绩平均值
	public function getschavgwen($schoolid)
	{

		$res = $this->where(['KLDM'=>'1','SCHOOLID'=>$schoolid])->avg('ZF');
		
		return $res; 
	}

	// 获取学校语文理科成绩大于某个值的人数
	public function getbigerli($schoolid,$fineid)
	{

		$res = $this->where(['KLDM'=>'2','SCHOOLID'=>$schoolid])->where('ZF','>=',$fineid)->count();

		return $res;
	}

	// 获取学校语文文科某个值的人数
	public function getbigerwen($schoolid,$fineid)
	{

		$res = $this->where(['KLDM'=>'1','SCHOOLID'=>$schoolid])->where('ZF','>=',$fineid)->count();

		return $res;
	}

}	