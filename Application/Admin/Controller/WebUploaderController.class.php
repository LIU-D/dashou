<?php
namespace Admin\Controller;

class WebUploaderController extends CommonController {
    public function index(){

    }
    public function WebUpload(){
      try{
         //获取图片对象
         $file = $request->file('file');

         //存放服务器上地址
         $serverFile = $file->move(ROOT_PATH.'/AAAAA/upload/image/single');
         dump(156132132);
         //访问地址
         $imageUrl = 'http://'.$_SERVER['HTTP_HOST'].str_replace(ROOT_PATH.'/public', '', $serverFile->getPathname());

         $ajaxJson['success'] = true;
         $ajaxJson['msg'] = $imageUrl;
     }catch(Exception $e){
         $ajaxJson['success'] = false;
     }


     return json_encode($ajaxJson);
    }
}
