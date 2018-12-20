<?php
namespace Home\Controller;
use Think\Controller;
class JoinController extends Controller {
    public function setjoin(){
        if(IS_POST){
            $join_user_id = $_SESSION['id'];
            $join_content = I('post.content');
            $join_model = D('Join');

            $data = array(
                'join_user_id' => $join_user_id,
                'join_content' => $join_content
            );
            if($join_model->add($data)){
                $this->success('提交成功！',U('Main/joinInfo'),2);
            }else{
                $this->error('提交失败！',U('Main/joinInfo'),2);
            }
        }else{
            $this->display();
        }
    }

}
