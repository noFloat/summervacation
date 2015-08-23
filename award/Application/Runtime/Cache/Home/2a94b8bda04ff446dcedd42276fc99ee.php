<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="/homework/award/Public/css/index.css">
  <link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<title>award</title>
</head>
<body>
<h4>距离活动结束还有 
  <strong id="RemainD"></strong>天 
  <strong id="RemainH"></strong>小时 
  <strong id="RemainM"></strong>分钟 
  <strong id="RemainS"></strong>.
  <strong id="RemainL"></strong>秒
</h4>
<input type ='text'id = "user_name" max-length ='15'/>
<button type="" class="btn btn-primary" id ='award'>抢</button>
</body>
<script language="JavaScript">
var runtimes = 0;
function GetRTime(){
  var nMS = <?php echo ($lefttime); ?>*1000-runtimes*1000;
  if (nMS>=0){
    var nD=Math.floor(nMS/(1000*60*60*24))%24;
    var nH=Math.floor(nMS/(1000*60*60))%24;
    var nM=Math.floor(nMS/(1000*60)) % 60;
    var nS=Math.floor(nMS/1000) % 60;
    document.getElementById("RemainD").innerHTML=nD;
    document.getElementById("RemainH").innerHTML=nH;
    document.getElementById("RemainM").innerHTML=nM;
    document.getElementById("RemainS").innerHTML=nS;
    runtimes++;
    setTimeout("GetRTime()",1000);
  }
}
var Num = 0;
onload = function() {
 Refresh();
 setInterval("Refresh();",100);
 GetRTime();
}
function Refresh() {
  if (Num<10){
    document.getElementById("RemainL").innerHTML = Num;
    Num = Num + 1;
  }else{
    Num=0;
  }
}
</script>
<script>
(function(){
  $("#award").click(function(){
    var user_name=$("#user_name").val();
    $.post("<?php echo U('Index/checktime');?>",
    {
      user_name:user_name
    },
    function(data,status){
    if(data == 0){
      alert('请到时间再进行');
    }else{
      alert(data);      
    }
    });
  });
})();
</script>
</html>