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

    public function userAdd(){
        $this->display();
    }

    public function add(){
        $pwd = I('post.user_pwd');
        if($pwd != ''){
          $data = array(
              'user_name' => I('post.user_name'),
              'user_idcard' => I('post.user_idcard'),
              'user_gender' => I('post.user_gender'),
              'user_nationality' => I('post.user_nationality'),
              'user_profession' => I('post.user_profession'),
              'user_birth' => I('post.user_birth'),
              'user_phone' => I('post.user_phone'),
              'user_pwd' => $pwd,
              'user_ismarried' => I('post.user_ismarried')
          );
        }else{
          $data = array(
              'user_name' => I('post.user_name'),
              'user_idcard' => I('post.user_idcard'),
              'user_gender' => I('post.user_gender'),
              'user_nationality' => I('post.user_nationality'),
              'user_profession' => I('post.user_profession'),
              'user_birth' => I('post.user_birth'),
              'user_phone' => I('post.user_phone'),
              'user_pwd' => '123',
              'user_ismarried' => I('post.user_ismarried')
          );
        }


        if (D('User')->add($data)){
            $this ->success('添加用户成功！',U('User/index'),2);
        } else {
            $this -> error('添加用户失败',U('User/index'),2);
        }
    }

    function userEdit(){
      $id = I('get.id');
      $user_model = D('User');
      $user = $user_model
              ->where("user_id = '$id'")
              ->find();
      $this->assign('user',$user);
      $this->display();
    }

    public function update(){
        $pwd = I('post.user_pwd');
        if($pwd != ''){
          $data = array(
              'user_id' => I('post.user_id'),
              'user_name' => I('post.user_name'),
              'user_idcard' => I('post.user_idcard'),
              'user_gender' => I('post.user_gender'),
              'user_nationality' => I('post.user_nationality'),
              'user_profession' => I('post.user_profession'),
              'user_birth' => I('post.user_birth'),
              'user_pwd' => $pwd,
              'user_phone' => I('post.user_phone'),
              'user_ismarried' => I('post.user_ismarried')
          );
        }else{
          $data = array(
              'user_id' => I('post.user_id'),
              'user_name' => I('post.user_name'),
              'user_idcard' => I('post.user_idcard'),
              'user_gender' => I('post.user_gender'),
              'user_nationality' => I('post.user_nationality'),
              'user_profession' => I('post.user_profession'),
              'user_birth' => I('post.user_birth'),
              'user_phone' => I('post.user_phone'),
              'user_ismarried' => I('post.user_ismarried')
          );
        }


        if (D('User')->save($data)){
            $this ->success('修改用户信息成功！',U('User/index'),2);
        } else {
            $this -> error('修改用户信息失败',U('User/index'),2);
        }
    }

    function delete(){
        $id = I('post.id');
        $user_model = D('user');
        if ($user_model->delete($id)){
            $this->success('删除成功',U('User/index'),2);
        }else{
            $this->error('删除失败',U('User/index'),2);
        }
    }

}
