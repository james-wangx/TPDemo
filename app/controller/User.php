<?php

namespace app\controller;

use app\BaseController;
use think\db\exception\DbException;
use think\response\View;

class User extends BaseController
{
    /**
     * @return View
     */
    public function index(): View
    {
        // 访问视图文件时，是以 public 为主目录
        return view("../view/login.html");
    }

    /**
     * 验证登录
     *
     * @return string
     */
    public function login(): string
    {
        $username = request()->post("username");
        $password = request()->post("password");
        $code = request()->post("code");

        // 从数据库中进行登录验证
        $user = new \app\model\User();
        try {
            $result = $user->where(
                [
                    "username" => $username,
                    "password" => $password
                ]
            )->select();

            if (count($result) === 1) {
                return "login-pass";
            } else {
                return "login-failed";
            }

            // 详细异常
            // } catch (exception\DataNotFoundException $e) {
            // } catch (exception\ModelNotFoundException $e) {
        } catch (DbException $e) {
            return "db-exception";
        }
    }
}