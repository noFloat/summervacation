<?php
namespace Home\Controller;
use Think\Controller;
use Think\Cache;

class IndexController extends Controller{ 
    //memcache缓存，时间是服务器时间
    public $starttime = '2015-8-24 0:21:00';
    public $endtime = '2015-8-24 1:35:00';
    public $lefttime = '';
    public $award_id ='1';  
    public $beginnum = '5';
    public $user;
    public function _before_index(){
        if(empty(S('award_num'))){
            S('award_num',$this->beginnum);
        }
    }
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


    public function checktime(){
        $clicktime = time();
        $this->endtime = strtotime($this->endtime);
        $award = M('content');
        $condition['id'] = $this->award_id;
        $award_state = $award->where($condition)->getField('award_state');
        if($this->endtime > $clicktime){
            echo 0;exit;
        }elseif(S('award_num') == 0){
            die("活动已经结束！");
        }else{
            $usercon =  S('award_num');
            S('award_num', $usercon - 1);
            echo  $usercon;
            if(S('award_num') == 0){
                $content['award_state'] = 1;
                $content['user_name'] = I(trim('post.user_name'));
                $list = $award->lock(true)->where($condition)->data($content)->save();
            }
            $user = M('user');
            $content_user['user_name'] = I(trim('post.user_name'));
            $user->add($content_user);
            echo '恭喜中奖';
        }
    }


    public function _empty() {
        $this->display('404/index');
    }


}