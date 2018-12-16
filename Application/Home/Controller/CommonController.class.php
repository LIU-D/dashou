<?php

namespace Home\Controller;


use Think\Controller;

class CommonController extends Controller
{
    function _initialize(){
        if(session('id') == 1) session(null);

        if (!session('?id')){
            $this->error('您尚未登录，请登录后再进行访问！',U('Home/Index/login'),2);
        }
    }
}
