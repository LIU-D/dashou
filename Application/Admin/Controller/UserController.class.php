<?php
namespace Admin\Controller;

class UserController extends CommonController {
    public function index(){
        $user_model = D('User');
        $user_list = $user_model
                ->where("user_id > 1")
                ->select();
        $this->assign('user_list',$user_list);
        $this->display();
    }
   

}