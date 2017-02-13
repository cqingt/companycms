<?php
namespace Home\Controller;

use Think\Controller;

class CategoryController extends BaseController
{
    public function index()
    {
        $cid = I('get.cid');

        if ($cid == 22) {
            $pictures = M('article')->where("status = 0 and fid = $cid")->order('id desc')->select();
            $this->assign('pictures', $pictures);
            $this->display('jidi'); return;
        }

        if ($cid == 25) {
            $this->display('contact');return;
        }

        if ($cid == 24) {
            $abouts = M('category')->where("fid=" . $cid)->select();
            $this->assign('abouts', $abouts);
            $this->display('about'); return;
        }

        if ($cid == 23) {
            $newsCategory = M('category')->where("fid=" . $cid)->select();
            $this->assign('newsCategory', $newsCategory);
            $this->assign('cid', $cid);

            $sid = I('get.sid');

            $condition = "(select id from lcm_category where fid={$cid})";

            if ($sid) {
                $condition = "($sid)";
                $category = M('category')->where("id=" . $sid)->find();
            }

            $article = D("article");
            $count = $article->where("status = 0 and fid in {$condition}")->count();//
            $Page = new \Think\Page($count, 6);
            $show = $Page->show();
            $articleList = $article->where("status = 0 and fid in {$condition}")->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign("articleList", $articleList);
            $this->assign('page', $show);

            $this->assign("category", isset($category) ? $category['name'] : ''); //当前分类
            $this->assign('sid', $sid);
            $this->display('news'); return;
        }

        if ($cid == 3) {
            $productCategory = M('category')->where("fid=" . $cid)->select();
            $this->assign('productCategory', $productCategory);
            $this->assign('cid', $cid);

            $sid = I('get.sid');

            $condition = "(select id from lcm_category where fid={$cid})";

            if ($sid) {
                $condition = "($sid)";
                $category = M('category')->where("id=" . $sid)->find();
            }

            $product = D("article");
            $count = $product->where("status = 0 and fid in {$condition}")->count();//
            $Page = new \Think\Page($count, 6);
            $show = $Page->show();
            $productList = $product->where("status = 0 and fid in {$condition}")->order('id desc')->limit($Page->firstRow . ',' . $Page->listRows)->select();
            $this->assign("productList", $productList);
            $this->assign('page', $show);

            $this->assign("category", isset($category) ? $category['name'] : ''); //当前分类
            $this->assign('sid', $sid);
            $this->display('products'); return;
        }
    }


    public function about() {
        $cid = I('get.cid');

        if ($cid) {
            $article = M('article')->where("status = 0 and fid = {$cid} ")->find();

            $this->ajaxReturn(array('status' => 0, 'content' => $article ? $article['content'] : ''));
        }
        $this->ajaxReturn(array('status' => 1));
    }

    //基地详情
    public function base() {
        $id = I('get.id');
        if ($id) {
            $detail = M('article')->find($id);
            $preStr = $nextStr = '';
            $cid = 22;

            if ($detail) {
                //更新查看次数
                $data = M('article')->create();
                $data['view'] = $detail['view'] + 1;
                M('article')->where("id = " . $id)->save($data);

                //上一篇
                $pre = M('article')->where("fid = " . $detail['fid'] . " and id < " . $id)->order("id desc")->find();

                if ($pre) {
                    $preStr = "<a href='" . U('Category/base', array('cid' => $cid, 'id' => $pre['id'])) . "'>" . $pre['title'] . '</a>';
                } else {
                    $preStr = '没有了';
                }

                //下一篇
                $next = M('article')->where("fid = " . $detail['fid'] . " and id > " . $id)->order("id asc")->find();
                if ($next) {
                    $nextStr = "<a href='" . U('Category/base', array('cid' => $cid, 'id' => $next['id'])) . "'>" . $next['title'] . '</a>';
                } else {
                    $nextStr = '没有了';
                }
            }

            $this->assign('cid', $detail['fid']);
            $this->assign('preStr', $preStr);
            $this->assign('nextStr', $nextStr);
            $this->assign('detail', $detail);
            $this->display('detail');
        }
    }

    //商品详情
    public function product() {
        $id = I('get.id');
        if ($id) {
            $detail = M('article')->find($id);
            $preStr = $nextStr = '';
            $cid = 3;

            if ($detail) {
                //更新查看次数
                $data = M('article')->create();
                $data['view'] = $detail['view'] + 1;
                M('article')->where("id = " . $id)->save($data);

                //上一篇
                $pre = M('article')->where("fid = " . $detail['fid'] . " and id < " . $id)->order("id desc")->find();

                if ($pre) {
                    $preStr = "<a href='" . U('Category/product', array('cid' => $cid, 'id' => $pre['id'])) . "'>" . $pre['title'] . '</a>';
                } else {
                    $preStr = '没有了';
                }

                //下一篇
                $next = M('article')->where("fid = " . $detail['fid'] . " and id > " . $id)->order("id asc")->find();
                if ($next) {
                    $nextStr = "<a href='" . U('Category/product', array('cid' => $cid, 'id' => $next['id'])) . "'>" . $next['title'] . '</a>';
                } else {
                    $nextStr = '没有了';
                }
            }

            $this->assign('cid', $cid);
            $this->assign('preStr', $preStr);
            $this->assign('nextStr', $nextStr);
            $this->assign('detail', $detail);
            $this->display('foods');
        }
    }

    //新闻详情
    public function news() {
        $id = I('get.id');
        if ($id) {
            $detail = M('article')->find($id);
            $preStr = $nextStr = '';

            $current = M('category')->where("id=" . $detail['fid'])->find();

            $cid = 23;

            if ($detail) {
                //更新查看次数
                $data = M('article')->create();
                $data['view'] = $detail['view'] + 1;
                M('article')->where("id = " . $id)->save($data);

                //上一篇
                $pre = M('article')->where("fid = " . $detail['fid'] . " and id < " . $id)->order("id desc")->find();

                if ($pre) {
                    $preStr = "<a href='" . U('Category/news', array('cid' => $cid,'id' => $pre['id'])) . "'>" . $pre['title'] . '</a>';
                } else {
                    $preStr = '没有了';
                }

                //下一篇
                $next = M('article')->where("fid = " . $detail['fid'] . " and id > " . $id)->order("id asc")->find();
                if ($next) {
                    $nextStr = "<a href='" . U('Category/news', array('cid' => $cid, 'id' => $next['id'])) . "'>" . $next['title'] . '</a>';
                } else {
                    $nextStr = '没有了';
                }
            }

            if (C('DEFAULT_THEME') == 'mobile') {
                $newsCategory = M('category')->where("fid=" . $cid)->select();
                $this->assign('newsCategory', $newsCategory);

                $this->assign('category', M('category')->find($detail['fid']));
            }

            $this->assign('cid', $cid);
            $this->assign('preStr', $preStr);
            $this->assign('nextStr', $nextStr);
            $this->assign('detail', $detail);
            $this->assign('current', $current['name']);
            $this->display('new');
        }
    }
}
