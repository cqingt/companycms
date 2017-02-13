<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $m = M("article");
        /*$count = $m->where("status = 0")->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();// 分页显示输出

        $list = $m->field('a.*,b.truename')
                    ->table("__ARTICLE__ a,__USER__ b")
                    ->where("a.status = 0 and b.id = a.uid")
                    ->order('a.istop desc,a.id desc')
                    ->limit($Page->firstRow . ',' . $Page->listRows)
                    ->select();
        $this->assign("list", $list);
        $this->assign('page', $show);// 赋值分页输出*/

        //首页公司新闻展示
        $companyNews = $m->field('a.*')
            ->table("__ARTICLE__ a,__CATEGORY__ c")
            ->where("a.status = 0 and c.id = a.fid and c.show_index = 'center' ")
            ->order('a.id desc')
            ->limit(2)
            ->select();

        //首页营养知识展示
        $nutritionNews = $m->field('a.*')
            ->table("__ARTICLE__ a,__CATEGORY__ c")
            ->where("a.status = 0 and c.id = a.fid and c.show_index = 'bottom' ")
            ->order('a.id desc')
            ->limit(4)
            ->select();

        //营养知识右侧图片+说明
        $nutritionDetail = array();
        if (count($nutritionNews) > 3) {
            $nutritionDetail = $nutritionNews[3];
            unset($nutritionNews[3]);
        }

        //$bases = M('bases')->order('id desc')->select();
        $bases = M('article')->where("status = 0 and fid = 22")->order('id desc')->select();

        //水果分类
        //产品展示
        $products = M('article')->where("status = 0 and fid in (select id from lcm_category where fid=3) and type=2")
            ->order('id desc')
            ->limit(6)
            ->select();

        //手机端水果分类
        $productCategory = M('category')->where("fid=3")->select();
        $this->assign('productCategory', $productCategory);

        $slides = M("slides");
        $slidesList = $slides->order("id desc")->select();
        $this->assign("companyNews", $companyNews);
        $this->assign("nutritionNews", $nutritionNews);
        $this->assign("nutritionDetail", $nutritionDetail);
        $this->assign("slidesLists", $slidesList);
        $this->assign("bases", $bases);
        $this->assign("products", $products);
        $this->display();
    }


    public function search()
    {
        $keywords = I("post.keywords");
        $m = M("article");
        $where['title'] = array("like", "%{$keywords}%");
        $where['status'] = array("eq", "0");
        $count = $m->where($where)->count();
        $Page = new \Think\Page($count, 10);
        $show = $Page->show();
        $articles = $m->where($where)->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();

        $this->assign('page', $show);
        $this->assign("count", $count);
        $this->assign("articles", $articles);
        $this->assign("keywords", $keywords);
        $this->display('search');
    }


}
