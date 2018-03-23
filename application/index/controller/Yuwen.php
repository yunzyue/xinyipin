<?php
namespace app\index\controller;
use think\Controller;
use think\Env;
use think\Request;
use think\Loader;
use think\Session;

use app\index\model\MarkyuwenModel;
use app\index\model\SchoolinfoModel;


class Yuwen extends Controller
{
    
    public function yuwenli()
    {
       
        $markyuwen = new MarkyuwenModel();

       
        $countli = $markyuwen->countli();
        $lizero = $markyuwen->lizero();

        //获取语文文科分数段成绩表
        // $leijinum[16] = 0;
        // $leijibilv[16] = 0;
        // for ($i=15; $i >=1 ; $i--) { 
        //     $front = $i*10-10;
        //     $behind = $i*10;

        //    $qujian[$i] = $markyuwen->liqujian($front,$behind); 
        //    $bilv[$i] = $qujian[$i]/$countli;
        //    $bilv[$i] = round($bilv[$i],4);

        //    $leijinum[$i] =$leijinum[$i+1]+$qujian[$i];
        //    $leijibilv[$i] =$leijibilv[$i+1]+$bilv[$i];
        // }
        // var_dump($qujian);
        // var_dump($bilv);
        // var_dump($leijinum);
        // var_dump($leijibilv);


        $this->paiminli($countli);
      
    }


    //语文理科数据排名数据
    public function paiminli($countli)
    {

        //获取学校id的集合
        $schoolinfo = new SchoolinfoModel();
        $markyuwen = new MarkyuwenModel();

        $fineid = 120;
        $passid = 90;
        $cityid = '71';//设置所在区县或城市的id值
        $column = $schoolinfo->getcolumn($cityid);

        // 数组去重
        $column = array_unique($column);
        
        if($column){
          foreach ($column as $key => $value) {
            // 获取学校总人数
            $res[$value]['schoolid'] = $value;
            $res[$value]['person'] = $markyuwen->getschpersonli($value); //获取人数
            $res[$value]['avg'] = $markyuwen->getschavgli($value);  //获取平均值
            $res[$value]['fine'] = $markyuwen->getbigerli($value,$fineid); //获取优秀人数
            $res[$value]['pass'] = $markyuwen->getbigerli($value,$pass); //获取优秀人数
            $res[$value]['120'] = $res[$value]['fine'];
            $res[$value]['110'] = $markyuwen->getbigerli($value,110);
            $res[$value]['100'] = $markyuwen->getbigerli($value,100);
            $res[$value]['90'] = $res[$value]['pass'];
            $res[$value]['80'] = $markyuwen->getbigerli($value,80);
            $res[$value]['70'] = $markyuwen->getbigerli($value,70);
            $res[$value]['60'] = $markyuwen->getbigerli($value,60);
            $res[$value]['50'] = $markyuwen->getbigerli($value,50);
            $res[$value]['40'] = $markyuwen->getbigerli($value,40);
            $res[$value]['30'] = $markyuwen->getbigerli($value,30);
            $res[$value]['20'] = $markyuwen->getbigerli($value,20);
            $res[$value]['10'] = $markyuwen->getbigerli($value,10);
            $res[$value]['0'] = $markyuwen->getbigerli($value,0);
          }
        }else{

          return '获取学校id失败!';
        }

    }


    public function yuwenwen()
    {
       
        $markyuwen = new MarkyuwenModel();
    
        $countwen = $markyuwen->countwen();
        $wenzero = $markyuwen->wenzero();


        //获取语文理科分数段成绩表
        $leijinum[16] = 0;
        $leijibilv[16] = 0;
        for ($i=15; $i >=1 ; $i--) { 
            $front = $i*10-10;
            $behind = $i*10;

           $qujian[$i] = $markyuwen->wenqujian($front,$behind); 
           $bilv[$i] = $qujian[$i]/$countwen;
           $bilv[$i] = round($bilv[$i],4);

           $leijinum[$i] =$leijinum[$i+1]+$qujian[$i];
           $leijibilv[$i] =$leijibilv[$i+1]+$bilv[$i];
        }
        var_dump($qujian);
        var_dump($bilv);
        var_dump($leijinum);
        var_dump($leijibilv);





    }






}
