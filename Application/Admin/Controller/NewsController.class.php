<?php
namespace Admin\Controller;
use Think\Upload;
use Think\Image;

class NewsController extends CommonController {
    public function index(){
        $news_model = D('News');
        $news_list = $news_model->select();
        $this->assign('news_list',$news_list);
        $this->display();
    }

    public function newsAdd(){
        $this->display();
    }

    public function newsEdit(){
      $id = I('get.id');


      $news = D('News')
            ->where("news_id='$id'")
            ->find();
      $this->assign('news',$news);
      $this->display();
    }

    public function add(){
        //定义文件上传配置项
        $config = array(
            'maxSize' => 8400000,
            'exts'    => array('jpg','jpeg','png','gif'),
            'rootPath'=> './Upload/NewsImages/'
        );

        if (!file_exists($config['rootPath'])) {
            @mkdir($config['rootPath']);
        }

        //实例化文件上传类，并将配置项作为参数传入
        $uploader = new Upload($config);
        //调用upload方法上传文件
        //上传成功，返回上传信息（二维数组），反之，返回false
        $upload_result = $uploader->upload();
        //判断上传返回值
        if (!$upload_result){
            //如果上传失败，则输出错误信息
            echo $uploader->getError();
        } else{
            $img = $config['rootPath'].$upload_result['f']['savepath'].$upload_result['f']['savename'];
        }
        //3.接收表单的其他数据，并构造要写入数据表的数据
        $data = array(
            'news_title' => I('post.news_title'),
            'news_author' => I('post.news_author'),
            'news_image' => $img,
            'news_content' => I('post.news_content')
        );

        //4.实例化Image模型，调用add方法将数据写入Image表
        if (D('News')->add($data)){
            $this ->success('添加资讯成功！',U('News/index'),2);
        } else {
            $this -> error('添加资讯失败',U('News/index'),2);
        }

    }

    function isdel(){
        $news_model = D('News');
        $news_list = $news_model->select();
        $data = array(
            'news_id' => I('post.id'),
            'news_isdel' => I('post.state')
        );
        if($news_model->save($data)){
            $this->success('修改成功！',U('News/index'),2);
        }else{
            $this->error('修改失败！',U('News/index'),2);
        }
    }


    function delete(){
        $id = I('post.id');
        $news_model = D('News');
        if ($news_model->delete($id)){
            $this->success('删除资讯成功',U('News/index'),2);
        }else{
            $this->error('删除资讯失败',U('News/index'),2);
        }
    }

    public function update(){
      //定义文件上传配置项
      $config = array(
          'maxSize' => 8400000,
          'exts'    => array('jpg','jpeg','png','gif'),
          'rootPath'=> './Upload/NewsImages/'
      );

      if (!file_exists($config['rootPath'])) {
          @mkdir($config['rootPath']);
      }

      //实例化文件上传类，并将配置项作为参数传入
      $uploader = new Upload($config);
      //调用upload方法上传文件
      //上传成功，返回上传信息（二维数组），反之，返回false
      $upload_result = $uploader->upload();
      //判断上传返回值
      if (!$upload_result){
          //如果上传失败，则输出错误信息
          echo $uploader->getError();
          $img = I('post.news_image');
      } else{
          $img = $config['rootPath'].$upload_result['f']['savepath'].$upload_result['f']['savename'];
      }


      $news_model = D('News');
      $news_list = $news_model->select();
      $data = array(
          'news_id' => I('post.news_id'),
          'news_title' => I('post.news_title'),
          'news_author' => I('post.news_author'),
          'news_content' => I('post.news_content'),
          'news_image' => $img

      );
      if($news_model->save($data)){
          $this->success('修改成功！',U('News/index'),2);
      }else{
          $this->error('修改失败！',U('News/index'),2);
      }
    }










    public function addArticle(){
        if(IS_POST){
            $article_title = I('post.articletitle');
            $article_author = I('post.author');
            $article_content = I('post.article_content');
            $article_summary = I('post.articlesummary');
            $article_model = D('Article');

            $data = array(
                'article_title' => $article_title,
                'article_author' => $article_author,
                'article_content' => $article_content,
                'article_summary' => $article_summary
            );
            if($article_model->add($data)){
                $this->success('添加文章成功！',U('index'),3);
            }else{
                echo "error";
                $this->error('添加文章失败！',U('addArticle'),3);
            }
        }else{
            $this->display();
        }
    }

    function editArticle(){
        $id = I('post.id');

        $this->display();
    }

    function stopArticle(){

        $article_model = D('Article');
        $data = array(
            'article_id' => I('post.id'),
            'article_isdel' => I('post.state'),
            'article_pubtime' =>I('post.time')
        );
        if($article_model->save($data)){
            $this->success('修改成功！',U('index'),3);
        }else{
            $this->error('修改失败！',U('index'),3);
        }



        // if(I('post.state') == '未发布'){
        //     $date = date("Y-m-d H:i:s");
        //     $data = array(
        //         'article_id' => I('post.id'),
        //         'article_isdel' => I('post.state'),
        //         'article_pubtime' => $date
        //     );
        // }else{
        //     $data = array(
        //         'article_id' => I('post.id'),
        //         'article_isdel' => I('post.state'),
        //         'article_pubtime' => ''
        //     );
        // }
    }

    function delArticle(){
        $id = I('post.id');
        $article_model = D('Article');
        if($article_model->delete($id)){
            $this->success('删除成功！',U('index'),3);
        }else{
                $this->error('删除失败！',U('index'),3);
        }
    }

}
