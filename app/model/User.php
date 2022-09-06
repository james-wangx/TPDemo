<?php

namespace app\model;

use think\Model;

class User extends Model
{
    // 如果主键名不为id，则必须手工指定逐渐名称
    protected $pk = "userid";
    // 为当前模型指定表名称，如果类名与表名一致，则可以不用指定
    protected $name = "user";

    // 一些直接和数据库相关的操作，可以定义在该模型中
}