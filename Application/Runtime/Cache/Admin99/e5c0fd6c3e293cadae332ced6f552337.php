<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>99培元后台登录系统</title>
<link rel="stylesheet" type="text/css" href="/Public/css/login/css/style.css" />
<script type="text/javascript" src="/Public/js/jq.js"></script>
</head>
<script>
$(function(){
		$("#verifyImg").on("click",function(){
				$(this).attr("src","/admin99/Verify/getVerifyCode?"+Math.random()+"");
			
		});


});
	
</script>
<body>
<div class="box">
	<div class="head">
		<img src="/Public/css/login/images/logo.png" style="margin:0 auto; line-height:192px;" />
		
	</div>
	<div class="mid">
		<form id="form1" name="form1" method="post" action="/admin99/Login/doLogin" style="width:266px; height:335px;">
		  <label>

			<input type="text" name="username" value=""  style="height:45px; width:210px; border:0;  margin-top:115px; margin-left:50px; font-size:18px; color:#666; background:none; font:'微软雅黑' #666;"/>
			<input type="password" name="password"  value="" style="height:45px; width:210px;  margin-top:31px; border:0; margin-left:50px; font-size:18px; color:#666; background:none; font:'微软雅黑' #666;"/>
			<div class="block">
			<input type="text" name="verify" style="height:45px; width:85px; border:0; position:relative; top:-16px; font-size:18px; color:#666; background:none; font:'微软雅黑' #666;"/><img src="/admin99/Verify/getVerifyCode"  style=" width:100px; height:45px; padding-left:206px;cursor:pointer" id="verifyImg" />
			<br />
			<input type="submit" style="border:1;background:none; text-indent:99999px; margin-top:28px;  width:266px; height:34px; cursor:pointer;position:relative;top:-22px;margin-left:-50px" />
		  </label>
        </form>
	  </div>
</div>
</body>
</html>