<?php
namespace Admin\Controller;

class MessageController extends CommonController {
    public function index(){
        $model = M();
        $message_list = $model
                ->field('message.*,user.*')
                ->table('ds_message as message, ds_user as user')
                ->where("user.user_id = message.message_user_id")
                ->order("message_id desc")
                ->select();
        $this->assign('message_list',$message_list);
        $this->display();
    }

    function messageEdit(){
      $id = I('get.id');
      $model = M();
      $message = $model
              ->field('m.*,u.*')
              ->table('ds_message as m, ds_user as u')
              ->where("u.user_id = m.message_user_id and m.message_id = '$id'")
              ->find();
      $this->assign('message',$message);
      $this->display();
    }

    function update(){
      $message_model = D('message');
      $data = array(
          'message_id' => I('post.message_id'),
          'message_answer' => I('post.message_answer')

      );
      if($message_model->save($data)){
          $this->success('修改成功！',U('Message/index'),2);
      }else{
          $this->error('修改失败！',U('Message/index'),2);
      }
    }

    function delete(){
        $id = I('post.id');
        $message_model = D('message');
        if ($message_model->delete($id)){
            $this->success('删除成功',U('Message/index'),2);
        }else{
            $this->error('删除失败',U('Message/index'),2);
        }
    }
}
