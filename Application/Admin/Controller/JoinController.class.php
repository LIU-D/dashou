<?php
namespace Admin\Controller;

class JoinController extends CommonController {
    public function index(){
      $model = M();
      $join_list = $model
              ->field('j.*,u.*')
              ->table('ds_join as j, ds_user as u')
              ->where("u.user_id = j.join_user_id")
              ->order("join_id desc")
              ->select();
      $this->assign('join_list',$join_list);
      $this->display();
    }

    function joinEdit(){
      $id = I('get.id');
      $model = M();
      $join = $model
              ->field('j.*,u.*')
              ->table('ds_join as j, ds_user as u')
              ->where("u.user_id = j.join_user_id and j.join_id = '$id'")
              ->find();
      $this->assign('join',$join);
      $this->display();
    }

    function update(){
      $join_model = D('Join');
      $data = array(
          'join_id' => I('post.join_id'),
          'join_ispass' => I('post.join_ispass')

      );
      if($join_model->save($data)){
          $this->success('修改成功！',U('Join/index'),2);
      }else{
          $this->error('修改失败！',U('Join/index'),2);
      }
    }

    function delete(){
        $id = I('post.id');
        $join_model = D('Join');
        if ($join_model->delete($id)){
            $this->success('删除成功',U('Join/index'),2);
        }else{
            $this->error('删除失败',U('Join/index'),2);
        }
    }
}
