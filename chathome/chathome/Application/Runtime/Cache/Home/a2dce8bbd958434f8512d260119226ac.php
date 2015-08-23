<?php if (!defined('THINK_PATH')) exit();?><div id="wap"></div>
<div id="login_page_father">
	<img src="/homework/chathome/chathome/Public/image/login/login_bg.png">
	<a id="close" href=""></a>
	<div id="login_content">
		<img id="login_logo" src="/homework/chathome/chathome/Public/image/login/new.png">
		<form action="" method="post">
			<div id="user_name_d">
				<img class="l" src="/homework/chathome/chathome/Public/image/login/login_img.png">
				<input id="user_name" type="text" placeholder="学生姓名">
			</div>
			<div id="password_d">
				<img class="l" src="/homework/chathome/chathome/Public/image/login/pass_img.png">
				<input id="password" type="password" placeholder="身份证后6位">
			</div>
			<div id="phone_d">
				<img style="float:left;margin:10px 6px 0 0;" src="/homework/chathome/chathome/Public/image/login/phone.png">
				<input id="phone" type="text">
			</div>
			<div id="qq_d">
				<img style="float:left;margin:10px 6px 0 0;" src="/homework/chathome/chathome/Public/image/login/qq.png">
				<input id="qq" type="text">
			</div>
			<div id="behavior_d">
				<img style="float:left;" src="/homework/chathome/chathome/Public/image/login/behavior.png">
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
					<img src="/homework/chathome/chathome/Public/image/global/cqupt.png">
					<img src="/homework/chathome/chathome/Public/image/global/cqupt_f.png">
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
					<img src="/homework/chathome/chathome/Public/image/global/cqupt.png">
					<img src="/homework/chathome/chathome/Public/image/global/cqupt_f.png">
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