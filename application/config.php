<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$
return [

      // 模板参数替换
    // 'view_replace_str'       => array(
    //     '__STATIC__'    => '/hehe/public/static', 
    // ),


   'URL_MODEL' => '2',

    'url_route_on' => true,
    'trace' => [
        'type' => 'html', // 支持 socket trace file
    ],
    //各模块公用配置
    'extra_config_list' => ['database', 'route', 'validate'],
    //临时关闭日志写入
    'log' => [
        'type' => 'test',
    ],

    'app_debug' => true,

    'AppKey' => '4640346a12b1e4406a2c5df1c25cabe5',     // key
    'AppSecret' => '75c27e84a1ff',


    // +----------------------------------------------------------------------
    // | 缓存设置
    // +----------------------------------------------------------------------

    //加密串
    'salt' => 'wZPb~yxvA!ir38&Z',

    //备份数据地址
    'back_path' => APP_PATH .'../back/',

    // 'empty_controller' => 'Index'
    'paginate'               => [
        'type'     => 'bootstrap6',
        'var_page' => 'page',
    ],

    'http_exception_template'    =>  [
        // 定义404错误的重定向页面地址
        404 =>  APP_PATH.'404.html',
        // 还可以定义其它的HTTP status
        401 =>  APP_PATH.'401.html',
    ]


];