<?php
namespace Home\Controller;
use Think\Controller;
class MainController extends CommonController {
  public function message(){
      $id = $_SESSION['id'];
      $message_model = D('Message');
      $message_list = $message_model
              ->where("message_user_id='$id'")
              ->order("message_id desc")
              ->select();
          $this->assign('message_list',$message_list);
          $this->display();
  }

  public function joinInfo(){
      $id = $_SESSION['id'];
      $user_model = D('User');
      $user = $user_model
              ->where("user_id='$id'")
              ->find();
      $this->assign('user',$user);

      $join_model = D('Join');
      $join = $join_model
              ->where("join_user_id='$id'")
              ->find();
      $this->assign('join',$join);
      $this->display();
  }
  public function personalInfo(){
      $id = $_SESSION['id'];
      $model = M();

      $policy_list = $model
              ->field('policy.*, user.*, policyto.user_name as policyto_name, policyto.user_idcard as policyto_idcard, policyto.user_gender as policyto_gender, policyto.user_nationality as policyto_nationality, policyto.user_profession as policyto_profession, policyto.user_birth as policyto_birth, policyto.user_ismarried as policyto_ismarried, policyto.user_phone as policyto_phone, beneficiary.user_name as beneficiary_name, beneficiary.user_idcard as beneficiary_idcard, beneficiary.user_gender as beneficiary_gender, beneficiary.user_nationality as beneficiary_nationality, beneficiary.user_profession as beneficiary_profession, beneficiary.user_birth as beneficiary_birth, beneficiary.user_ismarried as beneficiary_ismarried, beneficiary.user_phone as beneficiary_phone, insurance.*')
              ->table('ds_policy as policy, ds_user as user, ds_user as policyto, ds_user as beneficiary, ds_insurance as insurance')
              ->where("user.user_id = policy.policy_user_id and policyto.user_id = policy.policy_to_id and beneficiary.user_id = policy.policy_beneficiary_id and insurance.insurance_id = policy.policy_insurance_id and policy.policy_user_id='$id'")
              ->select();


      // $id = $_SESSION['id'];
      // $policy_model = D('Policy');
      // $policy_list = $policy_model
      //         ->query("select * from ds_policy, ds_user a, ds_user b, ds_user c, ds_insurance "
      //                 +"where a.user_id = ds_policy.policy_user_id "
      //                 +"and b.user_id = ds_policy.policy_from_id "
      //                 +"and c.user_id = ds_policy.policy_to_id "
      //                 +"and ds_insurance.insurance_id = ds_policy.policy_insurance_id "
      //                 +"and a.user_id='$id'");

      //dump($policy_list);
      $this->assign('policy_list',$policy_list);
      $this->display();
  }

}
