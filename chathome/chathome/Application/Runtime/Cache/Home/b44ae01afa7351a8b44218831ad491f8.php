<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <title>大声HI</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/welcome2015/Public/css/sayhi.css">
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
    <a id="go_top" href="#"></a>
    <div class="title">
        <div class="hi-title">
            <p>
                文章列表
            </p>
        </div>
        <div class="hi-container">
            <div class="write" id="write">
                <form action="<?php echo U('Sayhi/postTitle');?>" method="post">
                    <input style="text-align: center;" placeholder="文章标题" type="text" name="title_name">
                    <textarea rows="20" cols="20" name="content"></textarea>
                    <input type="submit" value="提交">
                </form>
                <a style="margin-left:600px;" class="w-btn" href="" id="cancel">取消</a>
            </div>
            <div class="write" id="show">
                <div class="wapper" id="content">
                    <span><?php echo ($remark_content["hi_title"]); ?></span>
                    <p><?php echo ($remark_content["hi_content"]); ?></p>
                </div>
                <div id="big">
                    <div class="pinglun" id="pinglun">
                        <span><?php echo ($remark["remark_content"]); ?></span>
                        <span class="data"><?php echo ($remark["remark_date"]); ?></span>
                        <span class="name"><?php echo ($remark["stu_name"]); ?></span>
                    </div>
                </div>
                <div id="foo">
                    <input type="button" value="<<">
                    <input type="button" value="<">
                    <input type="button" value="1">
                    <input type="button" value="2">
                    <input type="button" value="3">
                    <input type="button" value="4">
                    <input type="button" value="5">
                    <input type="button" value=">">
                    <input type="button" value=">>">
                </div>
                <div class="hehe">
                    <form action="<?php echo U('Sayhi/titleRemark');?>" method="post">
                        <input type="hidden" value="" name="data-id" id="data"/>
                        <textarea class="writeP" rows="3" cols="20" name='remark_content'></textarea>
                        <input id="tijiao" type="submit" value="提交">
                    </form>
                    <a id="cancelShow" href="#">取消</a>
                </div>
            </div>

            <div class="hi-top">
                <div class="list">标题</div>
                <div style="float:right;margin-right:40px;" class="list">相关信息</div>
            </div>
            <div class="hi-artcle" id="hi-artcle">
                <?php if(is_array($title)): $i = 0; $__LIST__ = $title;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$title): $mod = ($i % 2 );++$i;?><div class="li">
                        <a data_id="<?php echo ($title["id"]); ?>" class="t" href=""><?php echo ($title["hi_title"]); ?></a>
                        <div class="list-right">
                            <span href=""><?php echo ($title["stu_name"]); ?></span>
                            <span><?php echo ($title["hi_time"]); ?></span>
                            <span><?php echo ($title["remark_num"]); ?></span>
                        </div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div class="bottom" >
            <div id="bottom">
                <input type="button" value="<<">
                <input type="button" value="<">
                <input type="button" value="1">
                <input type="button" value="2">
                <input type="button" value="3">
                <input type="button" value="4">
                <input type="button" value="5">
                <input type="button" value=">">
                <input type="button" value=">>">
            </div>
        </div>
        <a href="" id="upload">上传文章</a>
    </div>

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
<script>
    (function(){
        var oDiv = document.getElementById("write"),
                oBtn1 = document.getElementById("upload"),
                oBtn2 = document.getElementById("cancel"),
                f = document.getElementById("hi-artcle"),
                cancelShow = document.getElementById("cancelShow"),
                g = document.getElementById("show"),
                xhr = ajaxObject.createXhr();
        eventHandler.addEvent(oBtn1,"click",function(){
            ajaxObject.POST(xhr,'','checklogin',function(res){
                if(!res) {
                    animation.move(oDiv,{"width":972,"height":720},400)

                } else {
                    alert("请先登录");
                }
            })

        });
        eventHandler.addEvent(oBtn2,"click",function(){
            animation.move(oDiv,{"width":0,"height":0},400);
        });
        eventHandler.addEvent(cancelShow,"click",function(e){
            animation.move(g,{"width":0,"height":0},400);
        })
        for(var i = 0;i < f.children.length;i++){
            eventHandler.addEvent(f.children[i].children[0],"click",function(){
                var data_id = this.getAttribute("data_id");
                ajaxObject.POST(xhr,"data_id=" + data_id,"showArticle",function(res){
                    var data = JSON.parse(res);
                    if(data){
                        animation.move(g,{"width":972,"height":720},400);
                        document.getElementById('content').children[0].textContent = data.content.hi_title;
                        document.getElementById('content').children[1].textContent = data.content.hi_content;
                        if(data.status == 100) {
                            ajaxObject.POST(xhr, 'data_id=' + data_id, "showRemark",function(rres) {
                                ddata = JSON.parse(rres);
                                if(ddata.status == 100) {
                                    var big = document.getElementById('big');
                                    var big_child = big.children;
                                    for(var i = 0; i < big_child.length; i++) {
                                        big.removeChild(big_child[i]);
                                    }
                                    var hehe = document.getElementById('data');
                                    hehe.value = ddata.post_id;
                                    ddata.data.forEach(function(a) {
                                        var obj_box = document.createElement('div');
                                        var obj_content = document.createElement('span');
                                        var obj_data = document.createElement('span');
                                        var obj_id = document.createElement('span');
                                        var obj = [obj_content, obj_data, obj_id];
                                        obj_box.setAttribute('class','pinglun');
                                        obj_content.textContent = a.remark_content;
                                        obj_data.setAttribute('class', 'data');
                                        obj_data.textContent = a.remark_data;
                                        obj_id.setAttribute('class', 'name');
                                        obj_id.textContent = a.stu_id;
                                        obj.forEach(function(b){
                                            obj_box.appendChild(b);
                                        });
                                        big.appendChild(obj_box);
                                    })
                                    var oUl1 = document.getElementById("big"),
                                            oFooter1= document.getElementById("foo");

                                    var b = new Paging(oUl1,oFooter1,5 ,false);
                                    b.dispaly();
                                    b.mclick(oFooter1);
                                    b.sclick(oFooter1);
                                }
                            })
                        }
                    }else{
                        alert("请先登录");
                    }
                })
            })
        }
    })();
</script>
<script src="/welcome2015/Public/js/sayhi.js"></script>
</body>
</html>