<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // $article_model = D('Article');
        // $img_model = D('Image');

        // $article_list = $article_model
        //     ->where('article_isdel = "已发布"')
        //     ->select();
        // $this->assign('article_list',$article_list);

        // $slide_list = $img_model
        //     ->where('img_typeid = 1 and img_isdel = "已发布"')
        //     ->select();
        // $this ->assign('slide_list',$slide_list);

        // $showbox_list = $img_model
        //     ->where('img_typeid = 2 and img_isdel = "已发布"')
        //     ->select();
        // $this ->assign('showbox_list',$showbox_list);

        // $member_list = $img_model
        //     ->where('img_typeid = 3 and img_isdel = "已发布"')
        //     ->select();
        // $this ->assign('member_list',$member_list);

        $news_model = D('News');
        $news_list = $news_model
                ->where('news_isdel = "已发布"')
                ->order("news_id desc")
                ->select();
        $this->assign('news_list',$news_list);

        $insurance_model = D('Insurance');
        $insurance_list = $insurance_model
                ->select();
        $this->assign('insurance_list',$insurance_list);

        $this->display();
    }


    public function login(){
        $this->display();
    }

    function check(){

        //3.接收表单提交的用户名和密码
        $phone = I('post.phone');
        $pwd = I('post.password');

        //4.实例化Users模型
        $user_model = D('User');

        //5.调用UsersModel中的checkLogin方法检测用户和密码是否正确
        //如果正确返回true，反之返回false
        if ($user_model->checkLogin($phone,$pwd)){
            $this->success('登陆成功！',U('index'),2);
        }else{
            $this->error('用户名或密码错误，请重新登录！',U('login'),2);
        }
    }

    function logout(){
        //清除session
        session(null);
        $this->success('退出登录成功！',U('index'),3);
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
        $this->display();
    }

    public function firm(){
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
        $this->display();
    }
    public function joinInfo(){
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
    public function historyBuss(){
        $this->display();
    }














    public function showList(){
        $article_model = D('Article');
        $article_list = $article_model
            ->where('article_isdel = "已发布"')
            ->select();
        $this->assign('article_list',$article_list);
        $this->display();
    }

    public function article(){
        $id = I('get.id');
        $article_list = D('Article')->find($id);
        $this->assign('article_list',$article_list);
        $this->display();
    }

    public function about(){
        $img_model = D('Image');
        $member_list = $img_model
            ->where('img_typeid = 3 and img_isdel = "已发布"')
            ->select();
        $this ->assign('member_list',$member_list);

        $this->display();
    }

    public function error404(){
        $this->display();
    }

    

}