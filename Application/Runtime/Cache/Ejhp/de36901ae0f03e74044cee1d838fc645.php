<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- <meta http-equiv="refresh" content="0.1;url=http://www.99peiyuan.com/ejiao/">  -->
<title>培元阿胶含片官网</title>
<link href="/Public/Ejiao/images/css/1.css" rel="stylesheet" type="text/css" />
<script src="/Public/pcmaka/images/js/jquery.min.js"></script>

</head>

<body>

<div class="box">
	<div class="banner"></div>
	<div class="navigation">
		<a title="阿胶历史" href="#ejls"><img src="/Public/Ejiao/images/ejls.jpg" style="width:110px; height:99px; float:left;" /></a> 
		<a title="血气测试" href="#xqcs"><img src="/Public/Ejiao/images/qxcs.jpg" style="width:110px; height:99px; float:left;" /></a>
		<a title="阿胶含片" href="#ejhp"><img src="/Public/Ejiao/images/ejhp.jpg" style="width:110px; height:99px; float:left;" /></a>
		<a title="功效和作用" href="#gxyzy"><img src="/Public/Ejiao/images/gxzy.jpg" style="width:113px; height:99px; float:left;" /></a>
		<a title="专家评说" href="#zjps"><img src="/Public/Ejiao/images/zjps.jpg" style="width:110px; height:99px; float:left;" /></a>
		<a title="适用人群" href="#syrq"><img src="/Public/Ejiao/images/syrq.jpg" style="width:110px; height:99px; float:left;" /></a>
		<a title="消费者评论" href="#xfzpl"><img src="/Public/Ejiao/images/xfzpl.jpg" style="width:113px; height:99px; float:left;" /></a>
		<a title="在线订购" href="#zxdg"><img src="/Public/Ejiao/images/zxdg.jpg" style="width:113px; height:99px; float:left;" /></a>
		<a title="我们的承诺" href="#wmdcn"><img src="/Public/Ejiao/images/wmdcn.jpg" style="width:111px; height:99px; float:left;" /></a>
	</div>
	<div class="p2"></div>
	<div class="p3">
			<div class="ejls" id="ejls" name="ejls">
			<div class="titlebar">
			<img src="/Public/Ejiao/images/p3.jpg" />
			</div>
			</div>
		
	</div>
    <script>
	
      function ows(e)
	  {		  
				var ws=$(".word").val();
				var   ws=ws+e;
				$(".word").val(ws);
		 }
    </script>
    <script type="text/javascript">
      function myCheck2()
      {
	var isMobile = /^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/; //手机号码验证规则
	var isPhone = /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   //座机验证规则
	
	var tel = $(".contact").val();
	var age=$(".age").val();
	var name=$(".name").val();
	if(name ==""){
		alert("您的姓名不能为空！");
		$(".name").focus();
		return false;
	}
	if(age==""){
		alert("年龄不能为空！");
		$(".age").focus();
		return false;
	}
	if(isNaN(age)){
		alert("年龄应为数字！");
		$(".age").focus();
		return false;
	}
	if(tel ==""){
		alert("联系电话不能为空！");
		$(".contact").focus();
		return false;
	}
	if(!isMobile.test(tel) && !isPhone.test(tel)){ //如果用户输入的值不同时满足手机号和座机号的正则
		alert("请正确填写电话号码，例如:13415764179或020-61396139");  //就弹出提示信息
		$(".contact").focus();
		return false; //返回一个错误，不向下执行
	}

		
        
      }
    </script>
	<div class="p4">
		<div class="xqcs" id="xqcs" name="xqcs">
			<div class="titlebar">
				<div class="right">
                <form method="post" id="form2" action="/ejhp/SubOrder/SubAdvisory"  style="width:370px; height:616px; margin-top:260px;">                
				  	<input name="" id="" type="checkbox" onclick="ows(value);" value="肌色暗黄，脸无光泽。"  style="width:21px; height:21px; border:0px;"/>
				  	<br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="头发干枯、唇色、指甲颜色淡白。" style="width:21px; height:21px; margin-top:9px; border:0px; "  /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="时常有头昏眼花的情况发生。"  style="width:21px; height:21px; margin-top:9px; border:0px;" /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="最近一段时间心悸。" style="width:21px; height:21px; margin-top:9px; border:0px;" /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="睡眠质量不高,经常无缘无故失眠。" style="width:21px; height:21px; margin-top:9px; border:0px;" /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="经常会有手足发麻的情况发生。"  style="width:21px; height:21px; margin-top:9px; border:0px;" /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="月经颜色比正常情况偏淡并且量少。" style="width:21px; height:21px; margin-top:10px; border:0px;" /><br />
					<input name="" id="" type="checkbox" onclick="ows(value);" value="经常气短乏力，容易疲劳。" style="width:21px; height:21px; margin-top:10px; border:0px;"/><br />
                    <input name="word" class="word" type="hidden" />
					
					<input name="name" class="name" type="text" style="width:166px; height:23px; margin-left:78px; margin-top:115px; background:none; border:0px; padding:0px;" />
					<input name="age" class="age" type="text" style="width:166px; height:23px; margin-left:78px; margin-top:14px; background:none; border:0px; padding:0px;" />
					<input name="contact" class="contact" type="text" style="width:166px; height:23px; margin-left:78px; margin-top:15px; background:none; border:0px; padding:0px;"/>
				  <input type="submit" name="Submit"onclick=" return myCheck2()"  value="" style="width:63px; height:21px; margin-left:181px; margin-top:12px; background:none; border:0px;" />

                  </form>
				</div>
			
			</div>
			</div>
	</div>
	<div class="p5">
			<div class="ejhp" id="ejhp" name="ejhp">
			<div class="titlebar">
			<img src="/Public/Ejiao/images/p5.jpg" />
			</div>
			</div>
	</div>
	<div class="p6">
		<div class="gxyzy" id="gxyzy" name="gxyzy">
			<div class="titlebar">
			<img src="/Public/Ejiao/images/p6.jpg" />
			</div>
			</div>
	</div>
	<div class="p7">
			<div class="ejls" id="ejls" name="ejls">
			<div class="titlebar">
			</div>
			</div>
	</div>
	<div class="p8">
	</div>
	<div class="p9">
			<div class="zjps" id="zjps" name="zjps">
			<div class="titlebar">
			<img src="/Public/Ejiao/images/p9.jpg" />
			</div>
			</div>
	</div>
	<div class="p10">
			<div class="syrq" id="syrq" name="syrq">
			<div class="titlebar">
			<img src="/Public/Ejiao/images/p10.jpg" />
			</div>
			</div>
	</div>
	<div class="p11">
			<div class="zxdg" id="zxdg" name="zxdg">
			<div class="titlebar">
				<a title="货到付款" href="#hdfk"><img src="/Public/Ejiao/images/button.png"  style="position:relative; top:159px; left:-78px;" /></a>
				<a title="货到付款" href="#hdfk"><img src="/Public/Ejiao/images/button.png" style="position:relative; top:159px; left:75px;"  /></a>
				<br />

				<a title="货到付款" href="#hdfk"><img src="/Public/Ejiao/images/button.png" style="position:relative; top:24px; left:-81px;" /></a>
				<a title="货到付款" href="#hdfk"><img src="/Public/Ejiao/images/button.png" style="position:relative; top:24px; left:71px; "/></a>
			</div>
			</div>
	</div>
	<div class="p12">
			<div class="xfzpl" id="xfzpl" name="xfzpl">
			<div class="titlebar">
			</div>
			</div>
	</div>
	<div class="p13">
			<div class="ejls" id="ejls" name="ejls">
			<div class="titlebar">
			</div>
			</div>
	</div>
	<div class="p14">
	<div class="hdfk" id="hdfk" name="hdfk">
			<div class="titlebar">
		<div class="left">
		<form method="post"  name="form1" id="form1" action="/ejhp/SubOrder/submit" onsubmit="return to_submit();" style="width:247px; height:446px; margin-left:203px; margin-top:205px;">
            <label>
            <select name="ProductId" id="ProductId" style="width:247px; height:30px; font-size:12px; color:#a30c1f;">
                 <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" style="color:#000000;"><?php echo ($vo["productname"]); ?>  ￥<?php echo ($vo["price"]); ?></option><?php endforeach; endif; ?>
		
            </select>
            </label>
                    <label>
                    <input type="text" name="name" id="name"  value=""  style="width:247px; height:30px; background:none; border:0px;  margin-top:19px; _margin-top:40px;" />
                    </label>
					<label>
                    <input type="text" name="contact" id="contact" value=""  style="width:247px; height:30px; background:none; border:0px; margin-top:17px; _margin-top:26px;" />
                    </label>
					<label>
                    <input type="text" name="address" id="address" value="" style="width:247px; height:30px; background:none; border:0px; margin-top:17px; _margin-top:28px;" />
                    </label>
		

					<label>
						<input type="radio" name="payment" id="payment" value="货到付款" checked style=" height:18px; width:18px; margin-top:25px; position:relative; left:-95px;"/>
                        <input type="text" name="ddhh" id="ddhh" value=""  style=" display:none;"/>
					</label>
					<br />
                    <div style="clear:both;"></div>
                    
			<label>
					<textarea name="word" id="word" style="background:none; width:243px; height:196px; border:0px; margin-top:20px; "></textarea>
			</label>
            <br />
            <label>
            <input type="submit" onclick="return mycheck()" name="Submit" value="" style="width:80px; height:30px; margin-top:21px; position:relative; left:-60px; background:none; cursor:pointer; border:0px;" />
            </label>
			<br />
            <label>
            <input type="reset" class="submit button orange" id="_phpsys_submit" value=" " style="width:80px; height:30px; margin-left:23px; position:relative; top:-30px; left:30px; background:none; cursor:pointer; border:0px;">
            </label>
          </form>
			</div>
				</div>
			</div>
			
			<div class="right">
				<div class="scroll">	  
		  
		  <script type="text/javascript">

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><body> 
 
<div style="width:960px; margin:0 auto;">
	<script type="text/javascript">
	 		var cpro_id = 'u524659';
	 </script>
 </div> 
  <script>   
		 
/* 表单判断 */
function mycheck(){
	var isMobile = /^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/; //手机号码验证规则
	var isPhone = /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   //座机验证规则
	var tel = $("#contact").val();
	var name=$("#name").val();
	var address=$("#address").val();
	if(name ==""){
		alert("您的姓名不能为空！");
		$("#name").focus();
		return false;
	}
	if(tel ==""){
		alert("联系电话不能为空！");
		$("#contact").focus();
		return false;
	}
	if(!isMobile.test(tel) && !isPhone.test(tel)){ //如果用户输入的值不同时满足手机号和座机号的正则
		alert("请正确填写电话号码，例如:13415764179或020-61396139");  //就弹出提示信息
		$("#contact").focus();
		return false; //返回一个错误，不向下执行
	}
	if(address==""){
		alert("联系地址不能为空！");
		$("#address").focus();
		return false;
	}
	
	
}


    </script>
 
 <script>
var tt1;
    function start(){
        demo=document.getElementById("xdemo");
        demo1=document.getElementById("xdemo1");
        demo2=document.getElementById("xdemo2");
        if(demo2==null){
            return;
        }        
        ShowNum();
        clearTimeout(tt1);
        
        demo2.innerHTML=demo1.innerHTML;
        function mar(){
            if(demo.scrollTop>=demo2.offsetHeight){
                 demo.scrollTop=0;
            }else{
                demo.scrollTop++;
            }
        }
        var tt2=setInterval(mar,20);
        demo.onmousemove=function(){
            clearInterval(tt2);
        }
        demo.onmouseout=function(){
            tt2=setInterval(mar,20);
        }     
    }
tt1=setTimeout(start,1000);
function CreateRecord(obj){
    return obj[Math.floor(Math.random()*obj.length)];
}
function GetNowTime(){
    var nowtime=new Date();
    var nowstr=nowtime.getFullYear()+"-";
    var nowmonth=nowtime.getMonth()+1;
    if(nowmonth<10){
        nowmonth="0"+nowmonth;
    }
    var nowdate=nowtime.getDate();
    if(nowdate<10){
        nowdate="0"+nowdate; 
    }
    nowstr+=nowmonth+"-"+nowdate;        
    return nowstr;
}
function ShowNum(){
    var mycars=new Array("张先生 ","钟先生 ","潘先生 ","梁先生 ","吕小姐 ","傅小姐 ","曹先生 ","冯先生 ","魏先生 ","郭先生 ",
        "金小姐 ","张先生 ","伍小姐 ","黄先生 ","余先生 ","顾先生 ","胡小姐 ","万小姐 ","欧先生 ","魏先生 ","宋小姐 ","曲小姐 ",
        "田先生 ","孟小姐 ","龙小姐 ","方先生 ","蒲先生 ","冉小姐 ","穆小姐 ","吴先生 ","赵先生 ","姚先生 ");    
    var mycars2=new Array("安徽马鞍山市  ","山东滨州市 ","辽宁沈阳市 ","江西南昌市 ","湖南张家界市 ","湖北天门市 ","黑龙鸡西市 ","河北邢台市 ",
    "浙江省绍兴市 ","辽宁省沈阳市 ","浙江省温州市 ","江苏省连云港 ","河南省郑州市 ","重庆市南川区 ","吉林省长春市 ","山东省烟台市 ","海南省海口市 ",
    "广东省东莞市 ","山西省太原市 ","辽宁省沈阳市 ","广西河池市 ","广东肇庆市 ","甘肃天水市 ","福建莆田市 ","北京门头沟 ","陕西铜川市 ");
    var mycars1=new Array("13","15","18");    
    var str="<ul>";
    for(var i =0;i<mycars.length;i++){
        var ph1=Math.floor(Math.random()*10);
        str+="<li>"+CreateRecord(mycars)+CreateRecord(mycars1)+ph1+"****"+ReturnPhone()+" "+CreateRecord(mycars2)+GetNowTime()+"  已发货</li>";
    }
    str+="</ul>";
    document.getElementById("xdemo1").innerHTML=str;
}
function ReturnPhone(){
    var mastr=Math.floor(Math.random()*10000);
    if(mastr<=1000){
        mastr=ReturnPhone();
    }
    return mastr;
}
</script>


<div id='xdemo' style="overflow: hidden; height:350px; width:300px; line-height:40px;margin-left:75px; margin-top:280px; color:#000000; font-size:12px;" ><div id='xdemo1'></div><div id='xdemo2'></div></div>

			
			</div>
	</div>
    </div>
	<div class="p15">
			<div class="wmdcn" id="wmdcn" name="wmdcn">
			<div class="titlebar">
			</div>
			</div>
	</div>
	<div class="tail"><span>Copyright © 天全县腾越建材经营部 2011-2015 版权所有 翻版必究     粤ICP备05058608号-1 </span></div>
</div>
<div class="bottom"></div>
<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAxNjc4Nl8yNTU3NTFfNDAwODg1NjgzNl8"></script>

<script language=javascript>
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2=' 网站商务通 主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
</script>
<script language="javascript" src="http://ala.zoossoft.com/JS/LsJS.aspx?siteid=ALA96738846&float=1&lng=big5"></script>



</body>
</html>