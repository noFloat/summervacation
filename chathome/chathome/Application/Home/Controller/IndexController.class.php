<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{

    public function index(){
        $this->checkstate();
        $this->display();
    }

    public function checkcontent(){//上传消息
        if(empty($_SESSION['user_name'])){
            echo 0;
        }else{
            $content['user_name'] = $_SESSION['user_name'];
            $content['comment_content'] =I(trim('post.content'));
            $content['comment_time'] = date("Y-m-d H:i:s", time());
            $content['comment_state'] = 1;
            $comment = M('comment');
            $comment -> data($content)->add();
            echo 1;
        }
    }
    public function checkstate(){
        if(empty(session('user_name'))){
            $this->assign('user',
                ' <button class="btn btn-primary btn-lg" data-toggle="modal" 
              data-target="#myModal">
              登陆
              </button>
              <button class="btn btn-primary btn-lg" id = \'register_but\'>
                注册
              </button>');
        }else{
            $this->assign('user',session('user_name'));
        }

    }

    public function checkLogin(){//登录
        $_userName = I(trim('post.userName'));
        echo $_userPasswd;
        $condition['user_name'] = $_userName;
    	$_userPasswd = I(trim('post.userPasswd'));
    	$usercheck = M('user');
        //$_userPasswd = md5(hash('sha256', ($_userPasswd >> ($_userPasswd % 3)) . substr($_userPasswd, 1, 3)));
        $condition['user_passwd'] = $_userPasswd;
        $user = $usercheck-> where($condition)->find();
        if(empty($user)){
            echo 0;
    	}else{
            $conditionup['user_lasttime'] =  date("Y-m-d H:i:s", time());
            $usercheck->where($condition)->save($conditionup);
            $_SESSION['user_name'] = $_userName;
            $this->checkstate();
            echo 1;

        }
    }

    public function register(){
        $userName = I(trim('post.register_name'));
        $condition['user_name'] = $userName;
        $userPasswd = I(trim('post.register_passwd'));
        $usercheck = M('user');
        $userexist = $usercheck->where($condition)->find();
        if(!empty($userexist)){
            echo 0;
        }else{
            $content['user_name'] = $userName;
            $content['user_passwd'] = md5(hash('sha256', ($userPasswd >> ($userPasswd % 3)) . substr($userPasswd, 1, 3)));
            $content['user_state'] = 1;
            $content['user_regtime'] = date("Y-m-d H:i:s", time());
            $content['user_lasttime'] = date("Y-m-d H:i:s", time());
            $usercheck->data($content)->add();
            $_SESSION['user_name'] = $userName;
            $this->checkstate();
            echo 1;
        }

    }
    public function output(){//输出消息到框
    	$content = M('comment');
    	$condition['user_name'] = session('userName');
        $condition['comment_state'] = 1;
     	$output = $content->select();
     	echo  json_encode($output);
    }



    public function _empty() {
        $this->display('404/index');
    }


}