<?php
// +----------------------------------------------------------------------
// | snake
// +----------------------------------------------------------------------
// | Copyright (c) 2016~2022 http://baiyf.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: NickBai <1902822973@qq.com>
// +----------------------------------------------------------------------
namespace app\admin\controller;
use app\admin\model\NodeModel;

use think\request;

class Index extends Base
{
    public function index()
    {
        // 获取权限菜单
        $node = new NodeModel();
        $this->assign([
            'menu' => $node->getMenu(session('rule'))
        ]);

        return $this->fetch('/index');
    }

    /**
     * 后台默认首页
     * @return mixed
     */
    public function indexPage()
    {
       
        return $this->fetch('index');
    }

}
