<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::get('think', function () {
    return '这里是ThinkPHP框架！';
});

// 访问 /hello/think，此时将转向 index 控制器下的 hello 方法，其中 :name 代表地址参数
Route::get('hello/:name', 'index/hello');

// 显示声明默认首页
Route::rule('/', "index/index");