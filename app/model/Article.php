<?php

namespace app\model;

use think\Collection;
use think\db\exception;
use think\Model;

class Article extends Model
{
    protected $pk = "articleid";

    /**
     * 获取文章列表
     *
     * @return Article[]|array|Collection
     * @throws exception\DataNotFoundException
     * @throws exception\DbException
     * @throws exception\ModelNotFoundException
     */
    public function getArticleList()
    {
        $result = $this->field("articleid, author, headline, viewcount, createtime")
            ->where("articleid", "<", 10)
            ->select();

        return $result;
    }

    /**
     * 通过文章 id 获取文章
     *
     * @param $id
     *
     * @return Article|array|mixed|Model|null
     * @throws exception\DataNotFoundException
     * @throws exception\DbException
     * @throws exception\ModelNotFoundException
     */
    public function getArticleById($id)
    {
        return $this->find($id);
    }
}