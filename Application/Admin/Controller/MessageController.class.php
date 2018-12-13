<?php
namespace Admin\Controller;

class MessageController extends CommonController {
    public function index(){
        $message_model = D('Message');
        $message_list = $message_model
                ->select();

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
   

}