<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\View;
//用于安装后最后一步无意义刷新时的BUG解决，到达最后一步时已经创建install.lock文件，入口会变为inde/index,添加空模块，对不存在的模块都定义到本模块下，即转到首页
class Error
{



    public function index(Request $request)
    {
        //根据当前控制器名来判断要执行那个城市的操作
        $cityName = $request->controller();
        return $this->city($cityName);
    }

    //注意 city方法 本身是 protected 方法
    protected function city($name)
    {
        abort(404,'页面不存在');
        //和$name这个城市相关的处理.
        return '当前城市' . $name;
    }
}

