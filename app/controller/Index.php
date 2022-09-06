<?php

// 命名空间，用于对不同的类进行归类管理，允许不同命名空间的类重名
namespace app\controller;

// 引用命名空间
use app\BaseController;

// Index 是一个正常的类，由于继承了 BaseController，所以也称为控制器，即 MVC 中的 C
class Index extends BaseController
{
    /**
     * Index 控制器下的 index 方法是默认首页的定义
     *
     * @return string
     */
    public function index(): string
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">16载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';
    }

    public function hello($name = 'ThinkPHP6'): string
    {
        return 'hello,' . $name;
    }
}
