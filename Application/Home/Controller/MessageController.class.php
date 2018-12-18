<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function setMessage(){
        if(IS_POST){
            $message_user_id = $_SESSION['id'];
            $message_question = I('post.question');
            $message_model = D('Message');

            $data = array(
                'message_user_id' => $message_user_id,
                'message_question' => $message_question
            );
            if($message_model->add($data)){
                $this->success('提交成功！',U('Main/message'),2);
            }else{
                $this->error('提交失败！',U('Main/message'),2);
            }
        }else{
            $this->display();
        }
    }

}
