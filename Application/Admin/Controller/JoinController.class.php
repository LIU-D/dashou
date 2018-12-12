<?php
namespace Admin\Controller;

class JoinController extends CommonController {
    public function index(){
        $join_model = D('Join');
        $join_list = $join_model
                ->select();
        $this->assign('join_list',$join_list);
        $this->display();
    }
   

}