<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $news_model = D('News');
        $news_list = $news_model
                ->where('news_isdel = "已发布"')
                ->order("news_id desc")
                ->limit(3)
                ->select();
        $this->assign('news_list',$news_list);

        $insurance_model = D('Insurance');
        $insurance_list = $insurance_model
                ->where('insurance_isdel = "已发布"')
                ->limit(9)
                ->select();
        $this->assign('insurance_list',$insurance_list);

        $this->display();
    }


    public function login(){
        $this->display();
    }

    function check(){
        $phone = I('post.phone');
        $pwd = I('post.password');
        $user_model = D('User');

        //5.调用UsersModel中的checkLogin方法检测用户和密码是否正确
        //如果正确返回true，反之返回false
        if ($user_model->checkLogin($phone,$pwd)){
            if($pwd == '123') {
              session(null);
              $this->error('该用户未被激活，请前往当地站点激活！',U('login'),2);
            }
            else if($phone == 'admin') $this->success('登陆成功！',U('Admin/Index/index'),2);
            else $this->success('登陆成功！',U('index'),2);
        }else{
            $this->error('用户名或密码错误，请重新登录！',U('login'),2);
        }
    }

    function logout(){
        //清除session
        session(null);
        $this->success('退出登录成功！',U('index'),2);
    }

    public function newsList(){
        $news_model = D('News');
        $news_list = $news_model
            ->where('news_isdel = "已发布"')
            ->order("news_id desc")
            ->select();
        $this->assign('news_list',$news_list);
        $this->display();
    }

    public function newsSingle(){
        $id = I('get.id');
        $news = D('News')->find($id);
        $this->assign('news',$news);
        $this->display();
    }

    public function personal(){
      $insurance_model = D('Insurance');
      $insurance_list = $insurance_model
              ->where('insurance_isdel = "已发布" and insurance_customer="个人客户"')
              ->select();
      $this->assign('insurance_list',$insurance_list);
      $this->display();
    }

    public function firm(){
      $insurance_model = D('Insurance');
      $insurance_list = $insurance_model
              ->where('insurance_isdel = "已发布" and insurance_customer="企业客户"')
              ->select();
      $this->assign('insurance_list',$insurance_list);
      $this->display();
    }

    public function personalService(){
        $this->display();
    }
    public function firmService(){
        $this->display();
    }
    public function searchAgent(){
        $province = I('post.province');
        $city = I('post.city');
        if($province != null && $city !=null){
            $agent_model = D('Agent');
            $agent_list = $agent_model
                ->where("agent_province='%s' and agent_city='%s'",$province,$city)
                ->select();
            $this->assign('agent_list',$agent_list);
            $this->display();
        }else{
            $agent_model = D('Agent');
            $agent_list = $agent_model
                // ->where($map)
                ->select();
            $this->assign('agent_list',$agent_list);
            $this->display();
        }

    }


    public function call(){
        $this->display();
    }
    public function firmInfo(){
        $this->display();
    }
    public function outlook(){
        $this->display();
    }
    public function showAgent(){

          $agent_model = D('Agent');
          $agent_list = $agent_model
              ->select();
          $this->assign('agent_list',$agent_list);
          $this->display();
    }



}
