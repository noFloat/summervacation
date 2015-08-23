<?php  
//php的时间是以秒算。js的时间以毫秒算  
date_default_timezone_set('PRC');
date_default_timezone_set("Asia/Hong_Kong");//地区  
   
//配置每天的活动时间段
$starttimestr = "08:00:00";  //当时间等于这个时，开发计算
$my_djsj="23:50:00"; //这个是 倒计时间 多少秒
$endtimestr = "00:00:00";//到这个时间暂停


//strtotime() 函数将任何英文文本的日期时间描述解析为 Unix 时间戳。
$starttime = strtotime($starttimestr);   
$my_djsj = strtotime($my_djsj);
$endtime = strtotime($endtimestr);



$nowtime = time();               
if ($nowtime<$starttime){  //--------------------这里需要用JS来获取当前时间=$nowtime，如果是php 要不停的刷新这个页面才行这个怎么做
  die("活动还没开始,活动时间是：{$starttimestr}至{$endtimestr}");  
}  

if ($nowtime==$endtime){   //------------------这里需要用JS来获取当前时间=$nowtime，如果是php 要不停的刷新这个页面才行这个怎么做
  die("竞拍停一下");
}  

if ($nowtime==$starttime){  //--------------------这里需要用JS来获取当前时间=$nowtime，如果是php 要不停的刷新这个页面才行这个怎么做
  //$mysql="update table set my_djsj=当前时间+$my_djfj";
}  



$lefttime = $my_djsj-$nowtime; //还有多少秒 到结束时间（秒）   结束时间 减 当前时间 如果 >=0 成立
?>  






<script language="JavaScript">
var runtimes = 0;  
function GetRTime(){  
  var nMS = <?=$lefttime?>*1000-runtimes*1000;  
  var nH=Math.floor(nMS/(1000*60*60))%24;  
  var nM=Math.floor(nMS/(1000*60)) % 60;
  var nS=Math.floor(nMS/1000) % 60;
  var now=
  document.getElementById("RemainH").innerHTML=nH;  
  document.getElementById("RemainM").innerHTML=nM;  
  document.getElementById("RemainS").innerHTML=nS;  
if(nMS>5*59*1000&&nMS<=5*60*1000)  
  {
  alert("还有最后五分钟！");
   }  
  runtimes++;  
  setTimeout("GetRTime()",1000);  
  }  

window.onload=GetRTime;
</script>  

<h4>
<strong id="RemainH">XX</strong>:小时
<strong id="RemainM">XX</strong>:分
<strong id="RemainS">XX</strong>秒
</h4> 