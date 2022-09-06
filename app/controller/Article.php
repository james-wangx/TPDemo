<?php

namespace app\controller;

use app\BaseController;
use think\db\exception;
use think\response\View;

class Article extends BaseController
{
    /**
     * 文章列表页面
     *
     * @return View
     * @throws exception\DataNotFoundException
     * @throws exception\DbException
     * @throws exception\ModelNotFoundException
     */
    public function index(): View
    {
        $article = new \app\model\Article();
        $result = $article->getArticleList();

        // echo $result;

        return view("../view/list.html", ["articleList" => $result]);
    }

    /**
     * 文章阅读页面
     *
     * @param $id
     *
     * @return View
     * @throws exception\DataNotFoundException
     * @throws exception\DbException
     * @throws exception\ModelNotFoundException
     */
    public function read($id): View
    {
        $article = new \app\model\Article();
        $result = $article->getArticleById($id);

        return view("../view/read.html", ["article" => $result]);
    }
}