<?php
namespace app\admin\model;
use think\Model;
class IndexModel extends Model{
    protected $table = 'he_website';

    public function getMysql(){
        $re=$this->query("select VERSION() as ver");
        return $re[0]['ver'];

    }


}