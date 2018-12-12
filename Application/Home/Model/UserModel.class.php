<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
    function checkLogin($phone, $pwd){
        $info = $this->where("user_phone='$phone' and user_pwd='$pwd'")->find();
        if(empty($info)){
            return false;
        } else {
            //将用户信息记录到session当中
            session('id', $info['user_id']);
            session('name', $info['user_name']);

            return true;
        }
    }
}

?>