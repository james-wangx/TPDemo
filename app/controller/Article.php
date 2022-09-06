<?php

namespace app\controller;

use app\BaseController;
use think\response\View;

class Article extends BaseController
{
    /**
     * 文章列表
     *
     * @return View
     */
    public function index(): View
    {
        $article = new \app\model\Article();
        $result = $article->getArticleList();

        if ($result === "db-exception") {
            return view("../view/50x.html", ["error", $result]);
        }

        return view("../view/list.html", ["articleList" => $result]);
    }

    /**
     * 阅读页面
     *
     * @param $id : 文章 id
     *
     * @return View
     */
    public function read($id): View
    {
        $article = new \app\model\Article();
        $result = $article->getArticleById($id);

        if ($result === "db-exception") {
            return view("../view/50x.html", ["error", $result]);
        }

        return view("../view/read.html", ["article" => $result]);
    }
}