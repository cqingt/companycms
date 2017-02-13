<?php
namespace Admin\Controller;
use Think\Controller;
class ImagesController extends CommonController {
    public function base(){
        $bases = M('bases')->order('created desc')->select();

        $this->assign('bases', $bases);
        $this->display();
    }

    public function upload_page() {
        $id = I('get.id');
        $base = null;

        if ($id) {
            $base = M('bases')->find($id);
        }
        $this->assign('base', $base);
        $this->display();
    }

    public function upload_base() {
        $id = I('get.id');
        $m = M("bases");
        $data = $m->create();
        $data['created'] = time();
        //print_r($data);die;
        if ($id) {
            $result = $m->where("id = $id")->save($data);
        } else {
            $result = $m->add($data);
        }

        if($result){
            $this->success('操作成功');
        }else{
            $this->error('操作失败');
        }
    }

    public function delete_base() {
        $id = I('get.id');

        if ($id) {
            if (M('bases')->delete($id)){
                $this->ajaxReturn(array('status'=> '0'));
            }
        }
        $this->ajaxReturn(array('status'=> '1'));
    }
}
