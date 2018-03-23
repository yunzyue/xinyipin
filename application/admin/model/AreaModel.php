<?php
namespace app\admin\model;
use think\Model;
class AreaModel extends Model{
    protected $table = 'he_area';
    public function getarea($pid){
        $alist=$this->where(['parentid'=>$pid])->select();
        return tp5ModelTransfer($alist);
    }


    public function getall(){
        $alist=$this->select();
        return tp5ModelTransfer($alist);
    }

    public function xunhuanlist($areaList,$pid){
        $manages = array();
        foreach ($areaList as $row) {
            if ($row['parentid'] == $pid) {
                $manages[$row['id']] = $row;
                $children = $this->xunhuanlist($areaList, $row['id']);
                $children && $manages[$row['id']]['children'] = $children;
            }
        }
        return $manages;
    }

    public function getname($nid){
        $alist=$this->where('id',$nid)->column('cityName');//where('status',1)->column('name');

        return($alist);
    }

}