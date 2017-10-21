<!DOCTYPE HTML>
<html>
<head>
<!-- <script id="allmobilize" charset="utf-8" src="js/allmobilize.min.js"></script> -->
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate" media="handheld"  />
<!-- end 云适配 -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>注册-虎牙网</title>
<meta property="qc:admins" content="23635710066417756375" />
<meta content="虎牙网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在虎牙网" name="description">
<meta content="虎牙,虎牙网,虎牙招聘,拉钩, 拉钩网 ,互联网招聘,虎牙互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 虎牙官网, 虎牙百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

<meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

<!-- <div class="web_root"  style="display:none">h</div> -->
<script type="text/javascript">
var ctx = "h";
console.log(1);
</script>
<link rel="Shortcut Icon" href="{{URL::asset('h/images/favicon.ico')}}">
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<script src="js/jquery.1.10.1.min.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.lib.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/core.min.js"></script>


<script type="text/javascript">
var youdao_conv_id = 271546;
</script>
	{{--validate--}}
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
	<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
	<style>
		.error{
			color:red;
		}
	</style>
	{{--validate end--}}
<!-- <script type="text/javascript" src="js/conv.js"></script> -->
</head>

<body id="login_bg">
	<div class="login_wrapper">
		<div class="login_header">
        	<a href="h/"><img src="images/logo_white.png" width="285" height="62" alt="虎牙招聘" /></a>
            <div id="cloud_s"><img src="images/cloud_s.png" width="81" height="52" alt="cloud" /></div>
            <div id="cloud_m"><img src="images/cloud_m.png" width="136" height="95"  alt="cloud" /></div>
        </div>

    	<input type="hidden" id="resubmitToken" value="9b207beb1e014a93bc852b7ba450db27" />
		<div class="login_box">
			{{--原虎牙代码--}}
        	{{--<form id="loginForm">--}}

            	{{--<input type="text" id="email" name="email" tabindex="1" placeholder="请输入常用邮箱地址" />--}}
                {{--<span class="error" style="display:none;" id="ar"></span>--}}
                {{--<input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码" />--}}
                {{--<span class="error" style="display:none;" id="br"></span>--}}
                {{--<input type="password" id="password" class="t_password" name="password" tabindex="2" placeholder="再次输入密码" />--}}
                {{--<span class="error" style="display:none;" id="cr"></span>--}}
                {{--<input type="text" id="password" class="phone" name="phone" tabindex="2" placeholder="请输入手机号" />--}}
            	{{--<label class="fl registerJianJu" for="checkbox">--}}
            		{{--<input type="checkbox" id="checkbox" name="checkbox"  class="checkbox valid" />我已阅读并同意<a href="h/privacy.html" target="_blank">《虎牙用户协议》</a>--}}
           		{{--</label>--}}
                {{--<input type="button" id="submitLogin" value="注 &nbsp; &nbsp; 册" />--}}
				{{----}}
                {{--<input type="hidden" id="callback" name="callback" value=""/>--}}
                {{--<input type="hidden" id="authType" name="authType" value=""/>--}}
                {{--<input type="hidden" id="signature" name="signature" value=""/>--}}
                {{--<input type="hidden" id="timestamp" name="timestamp" value=""/>--}}
            {{--</form>--}}

			<form class="cmxform" id="loginForm" method="get" action="">
				{{--<fieldset>--}}
					{{--<legend>验证完整的表单</legend>--}}
				{{--<br>--}}
				{{--<label for="email">Email</label>--}}
				{{--<input id="email" style="width:280px" name="email" type="email">--}}
				<br>
				<span>
						<label for="email">邮箱</label>
						<input id="email" style="width:280px" name="email" type="text">
				</span>
				<br>
						<label for="phone">手机</label>
						<input id="phone" style="width:280px" name="phone" type="text">
				<br>
						{{--<label for="username">账户</label>--}}
						{{--<input id="username" style="width:280px" name="username" type="text">--}}
				{{--<br>--}}

						<label for="password">密码</label>
						<input id="password" style="width:280px" name="password" type="password">
				<br>
						<label for="confirm_password">重复<br>密码</label>
						<input id="confirm_password" style="width:280px" name="confirm_password" type="password">
				<br>

						<label for="agree">请同意我们的声明</label>
						<input type="checkbox" class="checkbox" id="agree" name="agree">


						{{--<input class="submit" type="submit" value="提交">--}}
						<input type="submit" class="submit" id="submit" value="注 &nbsp; &nbsp; 册" />
				{{--</fieldset>--}}
			</form>

            <div class="login_right">
            	<div>已有虎牙帐号</div>
            	<a  href="login"  class="registor_now">直接登录</a>
                <div class="login_others">使用以下帐号直接登录:</div>
                <a  href="h/ologin/auth/sina.html"  target="_blank" class="icon_wb" title="使用新浪微博帐号登录"></a>
               	<a  href="h/ologin/auth/qq.html"  class="icon_qq" target="_blank" title="使用腾讯QQ帐号登录" ></a>
            </div>
        </div>
        <div class="login_box_btm"></div>
    </div>

    <script type="text/javascript">
		{{--validate--}}
		$().ready(function() {
// 在键盘按下并释放及提交后验证提交表单
			$("#loginForm").validate({
				rules: {
					firstname: "required",
					lastname: "required",
					username: {
						required: true,
						minlength: 2
					},
					phone: {
						required: true,
						minlength: 11
					},
					password: {
						required: true,
						minlength: 5
					},
					confirm_password: {
						required: true,
						minlength: 5,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
					"topic[]": {
						required: "#newsletter:checked",
						minlength: 2
					},
					agree: "required"
				},
				messages: {
					firstname: "请输入您的名字",
					lastname: "请输入您的姓氏",
					phone: {
						required: "请输入手机号",
						minlength: "请输入11位手机号"
					},
					username: {
						required: "请输入用户名",
						minlength: "用户名必需由两个字母组成"
					},
					password: {
						required: "请输入密码",
						minlength: "密码长度不能小于 5 个字母"
					},
					confirm_password: {
						required: "请输入密码",
						minlength: "密码长度不能小于 5 个字母",
						equalTo: "两次密码输入不一致"
					},
					email: "请输入一个正确的邮箱",
					agree: "请接受我们的声明",
					topic: "请选择两个主题"
				}
			});
		});
		$.validator.setDefaults({
			submitHandler: function() {
				var email = $('#email').val();
				var pwd = $('#password').val();
				var t_pwd = $('#confirm_password').val();
				var phone =$("#phone").val();
//				alert(email)
//				alert(pwd)
//				alert(t_pwd)
//				alert(phone)

				var ret = /^[\w]+(\.[\w]+)*@[\w]+(\.[\w]+)+$/;//邮箱正则
				if(! ret.test(email)){
					$('#ar').html('邮箱格式错误');
					$('#ar').attr('style','display:true;')
					return false;
				}else{
					$('#ar').attr('style','display:none;')
				}
				if(pwd =='')
				{
					$('#br').html('密码不能为空');
					$('#br').attr('style','display:true;')
					return false;
				}else{
					$('#br').attr('style','display:none;')
				}
				if(pwd != t_pwd){
					$('#cr').html('两次输入密码不一致');
					$('#cr').attr('style','display:true;')
					return false;
				}else{
					$('#cr').attr('style','display:none;')
				}
				$.ajax({
					type: "GET",
					url: "regin",
					data: "email="+email+"&pwd="+pwd+"&phone="+phone,
					success: function(msg){
						if(msg.error == 250)
						{
							alert(msg.msg);
							return false;
						}else if(msg.error==200){
							alert('注册成功,快去登陆吧');
							location.href = "login";//location.href实现客户端页面的跳转
						}
					}
				});
			}
		});


    	$('#submitLogin').click(function(){
    		var email = $('#email').val();
    		var pwd = $('#password').val();
    		var t_pwd = $('.t_password').val();
    		var phone =$(".phone").val();

    		var ret = /^[\w]+(\.[\w]+)*@[\w]+(\.[\w]+)+$/;//邮箱正则
			if(! ret.test(email)){
				$('#ar').html('邮箱格式错误');
				$('#ar').attr('style','display:true;')
				return false;
			}else{
				$('#ar').attr('style','display:none;')
			}
			if(pwd =='')
			{
				$('#br').html('密码不能为空');
				$('#br').attr('style','display:true;')
				return false;
			}else{
				$('#br').attr('style','display:none;')
			}
			if(pwd != t_pwd){
				$('#cr').html('两次输入密码不一致');
				$('#cr').attr('style','display:true;')
				return false;
			}else{
				$('#cr').attr('style','display:none;')
			}
		    $.ajax({
			   type: "GET",
			   url: "regin",
			   data: "email="+email+"&pwd="+pwd+"&phone="+phone,
			   success: function(msg){
			     if(msg.error == 250)
			     {
			     	alert(msg.msg);
					return false;
			     }else if(msg.error==200){
			     	alert('注册成功,快去登陆吧');
			     	 location.href = "login";//location.href实现客户端页面的跳转 
			     }
			   }
			});
    	})
    
    </script>
</body>
</html>
