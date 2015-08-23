<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>重邮地图</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/welcome2015/Public/css/map.css">
</head>
<body>
	<div id="wap"></div>
<div id="login_page_father">
	<img src="/welcome2015/Public/image/login/login_bg.png">
	<a id="close" href=""></a>
	<div id="login_content">
		<img id="login_logo" src="/welcome2015/Public/image/login/new.png">
		<form action="" method="post">
			<div id="user_name_d">
				<img class="l" src="/welcome2015/Public/image/login/login_img.png">
				<input id="user_name" type="text" placeholder="学生姓名">
			</div>
			<div id="password_d">
				<img class="l" src="/welcome2015/Public/image/login/pass_img.png">
				<input id="password" type="password" placeholder="身份证后6位">
			</div>
			<div id="phone_d">
				<img style="float:left;margin:10px 6px 0 0;" src="/welcome2015/Public/image/login/phone.png">
				<input id="phone" type="text">
			</div>
			<div id="qq_d">
				<img style="float:left;margin:10px 6px 0 0;" src="/welcome2015/Public/image/login/qq.png">
				<input id="qq" type="text">
			</div>
			<div id="behavior_d">
				<img style="float:left;" src="/welcome2015/Public/image/login/behavior.png">
                <div id="post_behavior">
                    <a href="#">动漫</a>
                    <a href="#">极客</a>
                    <a href="#">摄影</a>
                    <a href="#">吃货</a>
                    <a href="#">lol</a>
                    <a href="#">篮球</a>
                    <a href="#">旅游</a>
                    <a href="#">电影</a>
					<a href="#">学霸</a>
					<a href="#">健身</a>
					<a href="#">音乐</a>
					<a href="#">综艺</a>
				</div>	
			</div>
		</form>
		<a id="login_sub" href="">登录</a>
		<a id="skip" href="">跳过</a>
		<a id="yes" href="">确认</a>
		<p id="warming">
			你输入的帐号/密码格式有误
		</p>
	</div>
</div>
<div class="big_header">
	<div class="header" id="header">
		<div class="header_container">
			<ul class="nav">
				<li class="cqupt">
					<img src="/welcome2015/Public/image/global/cqupt.png">
					<img src="/welcome2015/Public/image/global/cqupt_f.png">
				</li>
				<li class="index">
					<a href="<?php echo U('Index/index');?>">首页</a>
				</li>
				<li class="map" style="margin: 0;width: 100px;height: 60px;background: transparent;">
					<a href="<?php echo U('Map/index');?>">重邮地图</a>
				</li>
				<li class="data_t" style="margin: 0;width: 100px;height: 60px;background: transparent;">
					<a href="<?php echo U('Data/index');?>">大数据</a>
				</li>
				<li class="page_t" style="margin: 0;width: 100px;height: 60px;background: transparent;">
					<a href="<?php echo U('Page/index');?>">重邮百科</a>
				</li>
				<li class="windcolor_t" style="margin: 0;width: 100px;height: 60px;background: transparent;">
					<a href="<?php echo U('Show/index');?>">重邮风采</a>
				</li>
				<li class="sayhi" style="margin: 0;background: transparent;">
					<a href="<?php echo U('Sayhi/index');?>">大声HI</a>
				</li>
				<li class="last">
					<a href="http://hongyan.cqupt.edu.cn/aboutus/">关于我们</a>
				</li>
				<li id="<?php echo ($login1); ?>">
					<a href="<?php echo ($checkState); ?>"><?php echo ($checkLogin); ?></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="header" id="H">
		<div class="header_container">
			<ul class="nav">
				<li class="cqupt">
					<img src="/welcome2015/Public/image/global/cqupt.png">
					<img src="/welcome2015/Public/image/global/cqupt_f.png">
				</li>
				<li class="index">
					<a href="<?php echo U('Index/index');?>">首页</a>
				</li>
				<li class="map">
					<a href="<?php echo U('Map/index');?>">重邮地图</a>
				</li>
				<li class="data_t">
					<a href="<?php echo U('Data/index');?>">大数据</a>
				</li>
				<li class="page_t">
					<a href="<?php echo U('Page/index');?>">重邮百科</a>
				</li>
				<li class="windcolor_t">
					<a href="<?php echo U('Show/index');?>">重邮风采</a>
				</li>
				<li class="sayhi" style="margin: 0;background: transparent;">
					<a href="<?php echo U('Sayhi/index');?>">大声HI</a>
				</li>
				<li class="last">
					<a href="http://hongyan.cqupt.edu.cn/aboutus/">关于我们</a>
				</li>
				<li id="<?php echo ($login2); ?>">
					<a href="<?php echo ($checkState); ?>"><?php echo ($checkLogin); ?></a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<div class="timer">
		<img src="/welcome2015/Public/image/global/maptimerbg.png">
		<div class="timer_container">
			<img id="cloud01" class="cloud01" src="/welcome2015/Public/image/global/cloud01.png">
			<img id="cloud02" class="cloud02" src="/welcome2015/Public/image/global/cloud03.png">
			<img id="cloud03" class="cloud03" src="/welcome2015/Public/image/global/cloud04.png">
			<img id="cloud04" class="cloud04" src="/welcome2015/Public/image/global/cloud05.png">
			<div class="logo"></div>
			<img class="car" src="/welcome2015/Public/image/global/car.png">
			<img src="/welcome2015/Public/image/hotball.png"class="hotball">
			<img class="line"src="/welcome2015/Public/image/global/map_line.png">
		</div>
	</div>
	<div class="container">
		<img src="/welcome2015/Public/image/global/mapground.jpg">
		<div class="container_content">
			<img class="line_right01" src="/welcome2015/Public/image/global/line_right01.png">
			<div class="mapwrapper">
				<a class="active" id = "btu_2D">2D地图</a>
				<a id = "btu_3D">街景地图</a>
				<img src="/welcome2015/Public/image/map/maptitle.png" alt="" class="maptitle">
				<div class = "mapstatic">
					<div id="D2map">
						<p>过头了哦~<br>恭喜你获得<br>拖地图狂魔称号</p>
						<img src="/welcome2015/Public/image/map/map.jpg" id="map">
						<div id="map-face"></div>
						<div id="smallmap"><img src="/welcome2015/Public/image/map/smallmap.jpg"></div>
						<div id="smallmap-face"></div>
						<div id="smallmap-border"></div>
					</div>
					<div id="D3map" style = "height:586px; width:912px;">
					</div>
				</div>
				<img src="/welcome2015/Public/image/global/grass.png" class = "grass">
			</div>
		</div>
		<a id="go_top" href="#"></a>
	</div>
	<div class="footer">
	<div class="footer_content">
		<p class="b">
			<a href="">
				关于红岩网校
			</a>    
			<span>|</span>    
			<a href="">
				网站地图
			</a>    
			<span>|</span>   
			<a href="">
				指出错误
			</a>    
			<span>|</span>    
			<a href="">
				管理入口
			</a>
		</p>
		<p>
			本网站由红岩网校工作站负责开发，管理，不经红岩网校委员会书面同意，不得进行转载
		</p>
		<p style="padding-bottom:46px;">
			地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail :redrock@cqupt.edu.cn (023-62461084)
		</p>
	</div>
</div>
<script>var http = "<?php echo U('login');?>"</script>
<script src="/welcome2015/Public/js/demo.js"></script>
	<script src="/welcome2015/Public/js/map.js"></script>
	<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=d84d6d83e0e51e481e50454ccbe8986b"></script>
</body>
</html>