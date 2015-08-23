<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{

    public function index(){
        $this->gettime();
        $this->display();
    }

    public function gettime(){
        $year =date("Y");
        echo $year;
    }
    public function _empty() {
        $this->display('404/index');
    }


}