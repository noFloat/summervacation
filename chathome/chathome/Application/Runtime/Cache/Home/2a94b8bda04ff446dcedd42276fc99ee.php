<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="/homework/chathome/chathome/Public/css/index.css">
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>beehome</title>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
   <div class="navbar-header">
      <a class="navbar-brand" href="#">beehome</a>
   </div>
  <div class = 'user'>
 <?php echo ($user); ?>
    </div>
</nav>
<div class="container" id = 'container'>
  <div class = 'talk_box' id ='talk_box'>
    <div id="container_talk">
  <!--       <div class= 'user_output'>
          <div>
            <span class='output_name'>sda</span>
            <span class = 'output_time'>dasda</span>
         </div>
         <span class='output'>&nbsp sda</span>
       </div> -->
    </div>
  </div>
    <div class = 'output_box'>
      <div class="modal-body" style = "">
         <input type="text" class="form-control" style ="width:300px" placeholder = "content" maxlength="60" id = 'comment_content'>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id ="output_sub">
          发送
        </button>
      </div>
    </div>
</div>


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
<!--           <form action = "<?php echo U('Index/checkLogin');?>" method='post'> -->
              <button type="button" class="close" 
              data-dismiss="modal" aria-hidden="true">
              &times;
              </button>
              <h4 class="modal-title" id="myModalLabel">
                <input type="text" class="form-control" style ="width:300px" placeholder = "用户名" maxlength="10" name = "userName" id ="userName">
              </h4>
            </div>
            <div class="modal-body">
              <input type="password" class="form-control" style ="width:300px" placeholder = "密码" maxlength="15" name ="userPasswd" id="userPasswd">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" 
              data-dismiss="modal">关闭
              </button>
              <button type="submit" class="btn btn-primary" id ='user_login'>
              登陆
              </button>
<!--           </form> -->
        </div>
      </div>
    </div>
  </div> 





  <div id ="register"class = 'registerbut'>
    <div class="modal-content">
<!--         <form action = "<?php echo U('Index/register');?>" method ='post'> -->
          <div class="modal-header">
            <button type="button" class="close" id ='fork'>
            &times;
            </button>
            <h4 class="modal-title" id="myModalLabel">
              <input type="text" class="form-control" style ="width:300px" placeholder = "用户名" maxlength="10" name = 'register_name' id = 'register_name'>
            </h4>
          </div>
          <div class="modal-body">
            <input type="password" class="form-control" style ="width:300px" placeholder = "密码" maxlength="15" name = 'register_passwd'id = 'register_passwd'>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id ="user_register">
              注册
            </button>
          </div>
<!--         </form> -->
      </div>
  </div>
</body>
<script>
(function(){
  var register_box = document.getElementById('register'),
    login = document.getElementById('register_but'),
    fork = document.getElementById('fork'),
    json;
  login.addEventListener("click",register);
  fork.addEventListener("click",hiddenbox);
  function register(){
    register_box.style.display = "block"
  }
  function hiddenbox(){
    register_box.style.display="none"
  }
})();

</script>
<script>
  setInterval(function(){
    $("#talk_box").scrollTop(10000000);
  },300);
(function(){
  var lastId = 0;
  setInterval(function(){
    var container_talk = document.getElementById("container_talk");
      $.post("<?php echo U('Index/output');?>",
        {
        },
        function(data,status){
          for(var i = lastId;i < JSON.parse(data).length;i++){
             var arr = [],
              node = document.createElement("div"); 
              node.className = "user_output";;
             json = JSON.parse(data)[i];
              for(var key in json){
                arr.push(json[key]);
              }
              node.innerHTML = "<div><span class='output_name'>" + arr[1] + "    </span><span class = 'output_time'>" + arr[3] + "</span></div><span class='output'>&nbsp" + arr[2] + "</span>";
               container_talk.appendChild(node);
              console.log(arr);
              lastId = arr[0];
          }
        });
     
  },300);
})();
(function(){
  $("#user_login").click(function(){
    var userName=$("#userName").val();
    var userPasswd=$("#userPasswd").val();
    $.post("<?php echo U('Index/checkLogin');?>",
    {
      userName:userName,
      userPasswd:userPasswd
    },
    function(data,status){

    if(data == 0){
      alert('账号密码错误');
    }
     parent.location.reload();

      // json = JSON.parse(data)[0];
      // for(var key in json){

      // }
    });
  });
})();

(function(){
  $("#user_register").click(function(){
    var register_name=$("#register_name").val();
    var register_passwd=$("#register_passwd").val();
    $.post("<?php echo U('Index/register');?>",
    {
      register_name:register_name,
      register_passwd:register_passwd
    },
    function(data,status){

    if(data == 0){
      alert('账号存在');
    }
     parent.location.reload();

      // json = JSON.parse(data)[0];
      // for(var key in json){

      // }
    });
  });
})();

(function(){
  $("#output_sub").click(function(){
    var content=$("#comment_content").val();
    $.post("<?php echo U('Index/checkcontent');?>",
    {
      content:content,
    },
    function(data,status){

    if(data == 0){
      alert('请先登录');
    }
      // json = JSON.parse(data)[0];
      // for(var key in json){

      // }
    });
  });
})();
</script>
</html>