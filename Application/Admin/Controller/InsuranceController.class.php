<?php
namespace Admin\Controller;

class InsuranceController extends CommonController {
    public function index(){
        $insurance_model = D('Insurance');
        $insurance_list = $insurance_model
                ->select();
        $this->assign('insurance_list',$insurance_list);
        $this->display();
    }
   

}