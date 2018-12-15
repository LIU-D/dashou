<?php
namespace Admin\Controller;
use Think\Upload;
use Think\Image;
class InsuranceController extends CommonController {
    public function index(){
        $insurance_model = D('Insurance');
        $insurance_list = $insurance_model
                ->select();
        $this->assign('insurance_list',$insurance_list);
        $this->display();
    }

    public function insuranceAdd(){
        $this->display();
    }

    function isdel(){
        $insurance_model = D('Insurance');
        $insurance_list = $insurance_model->select();
        $data = array(
            'insurance_id' => I('post.id'),
            'insurance_isdel' => I('post.state')
        );
        if($insurance_model->save($data)){
            $this->success('修改成功！',U('Insurance/index'),2);
        }else{
            $this->error('修改失败！',U('Insurance/index'),2);
        }
    }

    function delete(){
        $id = I('post.id');
        $insurance_model = D('Insurance');
        if ($insurance_model->delete($id)){
            $this->success('删除险种成功',U('Insurance/index'),2);
        }else{
            $this->error('删除险种失败',U('Insurance/index'),2);
        }
    }

    public function add(){
        //定义文件上传配置项
        $config = array(
            'maxSize' => 8400000,
            'exts'    => array('jpg','jpeg','png','gif'),
            'rootPath'=> './Upload/InsuranceImages/'
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
            'insurance_title' => I('post.insurance_title'),
            'insurance_categories' => I('post.insurance_categories'),
            'insurance_image' => $img,
            'insurance_content' => I('post.insurance_content')
        );

        //4.实例化Image模型，调用add方法将数据写入Image表
        if (D('Insurance')->add($data)){
            $this ->success('添加险种成功！',U('Insurance/index'),2);
        } else {
            $this -> error('添加险种失败',U('Insurance/index'),2);
        }
    }

    public function insuranceEdit(){
      $id = I('get.id');


      $insurance = D('Insurance')
            ->where("insurance_id='$id'")
            ->find();
      $this->assign('insurance',$insurance);
      $this->display();
    }


    public function update(){
      //定义文件上传配置项
      $config = array(
          'maxSize' => 8400000,
          'exts'    => array('jpg','jpeg','png','gif'),
          'rootPath'=> './Upload/InsuranceImages/'
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
          $img = I('post.insurance_image');
      } else{
          $img = $config['rootPath'].$upload_result['f']['savepath'].$upload_result['f']['savename'];
      }

      $insurance_model = D('Insurance');
      $data = array(
          'insurance_id' => I('post.insurance_id'),
          'insurance_title' => I('post.insurance_title'),
          'insurance_categories' => I('post.insurance_categories'),
          'insurance_image' => $img,
          'insurance_content' => I('post.insurance_content')

      );
      if($insurance_model->save($data)){
          $this->success('修改成功！',U('Insurance/index'),2);
      }else{
          $this->error('修改失败！',U('Insurance/index'),2);
      }
    }













}
