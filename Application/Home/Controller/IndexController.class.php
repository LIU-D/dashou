<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
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