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

    function userPolicy(){
      $id = I('get.id');
      $model = M();

      $policy_list = $model
              ->field('policy.*, user.*, policyto.user_name as policyto_name, policyto.user_idcard as policyto_idcard, policyto.user_gender as policyto_gender, policyto.user_nationality as policyto_nationality, policyto.user_profession as policyto_profession, policyto.user_birth as policyto_birth, policyto.user_ismarried as policyto_ismarried, policyto.user_phone as policyto_phone, beneficiary.user_name as beneficiary_name, beneficiary.user_idcard as beneficiary_idcard, beneficiary.user_gender as beneficiary_gender, beneficiary.user_nationality as beneficiary_nationality, beneficiary.user_profession as beneficiary_profession, beneficiary.user_birth as beneficiary_birth, beneficiary.user_ismarried as beneficiary_ismarried, beneficiary.user_phone as beneficiary_phone, insurance.*')
              ->table('ds_policy as policy, ds_user as user, ds_user as policyto, ds_user as beneficiary, ds_insurance as insurance')
              ->where("user.user_id = policy.policy_user_id and policyto.user_id = policy.policy_to_id and beneficiary.user_id = policy.policy_beneficiary_id and insurance.insurance_id = policy.policy_insurance_id and policy.policy_user_id='$id'")
              ->select();
      //dump($policy_list);
      $this->assign('policy_list',$policy_list);
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
