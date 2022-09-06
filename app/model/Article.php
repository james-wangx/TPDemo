<?php

namespace app\model;

use think\Collection;
use think\db\exception\DbException;
use think\Model;

class Article extends Model
{
    protected $pk = "articleid";

    /**
     * 获取文章列表
     *
     * @return Article[]|array|string|Collection
     */
    public function getArticleList()
    {
        try {
            return $this->field("articleid, author, headline, viewcount, createtime")
                ->where("articleid", "<", 10)
                ->select();
            // 详细异常
            // } catch (DataNotFoundException $e) {
            // } catch (ModelNotFoundException $e) {
            // }
        } catch (DbException $e) {
            return "db-exception";
        }
    }

    public function getArticleById($id)
    {
        try {
            return $this->find($id);
            // 详细异常
            // } catch (DataNotFoundException $e) {
            // } catch (ModelNotFoundException $e) {
        } catch (DbException $e) {
            return "db-exception";
        }
    }
}