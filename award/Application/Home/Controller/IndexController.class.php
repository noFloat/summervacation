<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
    public $starttime = '2015-8-24 0:21:00';
    public $endtime = '2015-8-24 1:35:00';
    public $lefttime = '';
    public $award_id ='1';
    public function index(){
        date_default_timezone_set('PRC');
        $this->setactivetime();
        $this->display();
    }

    public function setactivetime(){
        $this->starttime =strtotime($this->starttime);
        $this->endtime = strtotime($this->endtime);
        $nowtime = time();
        $award = M('content');
        $condition['id'] = $this->award_id;
        $award_state = $award->where($condition)->getField('award_state');
        if ($award_state == 0){
            $lefttime =  $this->endtime - $nowtime; 
            $this ->assign('lefttime',$lefttime);
        }else{
            $this ->assign('lefttime',0);
            die("活动已经结束！");
        }
    }

    // public function award(){
    //     $award = M('content');
    //     $condition['id'] = $this->award_id;
    //     $award_state = $award->where($condition)->getField('award_state');
        
    //     if($award_state == 1){
    //         die("活动已经结束！");
    //     }else{
    //         $content['award_state'] = 1;
    //         $content['user_name'] = I(trim('post.user_name'));
    //         $list = $award->lock(true)->where($condition)->data($content)->save();
    //         die('恭喜中奖');
    //     }
    // }

    public function checktime(){
        $clicktime = time();
        $this->endtime = strtotime($this->endtime);
        $award = M('content');
        $condition['id'] = $this->award_id;
        $award_state = $award->where($condition)->getField('award_state');
        if($this->endtime > $clicktime){
            echo 0;exit;
        }elseif($award_state == 1){
            die("活动已经结束！");
        }else{
            $content['award_state'] = 1;
            $content['user_name'] = I(trim('post.user_name'));
            $list = $award->lock(true)->where($condition)->data($content)->save();
            echo '恭喜中奖';
        }
    }

    public function _empty() {
        $this->display('404/index');
    }


}