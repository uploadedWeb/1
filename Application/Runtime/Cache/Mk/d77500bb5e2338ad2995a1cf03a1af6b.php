<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <meta http-equiv="refresh" content="0.1;url=http://www.99peiyuan.com/ejiao/"> -->
<title>315认证网站</title>
<link href="/Public/pcmaka/images/css/style.css" rel="stylesheet" type="text/css" charset="utf-8" />
<script src="/Public/pcmaka/images/js/jquery.min.js"></script>
<script src="/Public/pcmaka/images/js/lrtk.js"></script>
<script src="/Public/pcmaka/images/js/jscarousel.js" type="text/javascript"></script>
<script src="/Public/pcmaka/images/js/Area.js" type="text/javascript"></script>
<script src="/Public/pcmaka/images/js/AreaData_min.js" type="text/javascript"></script>
</head>
<body >
<DIV class="nav" >
  <DIV class="nav1 float" id="pf_nav">
    <DIV class="xl_xq_a"> <A title="首页" href="#" >首页</A>| <A title="秘鲁玛卡"  href="#blmk">秘鲁玛卡</A>| <A title="玛卡益康"  href="#mkyk">玛卡益康</A>| <A title="玛卡功效"  href="#mkykgx">玛卡功效</A>| <A title="强肾原理"  href="#qsyl">强肾原理</A>| <A title="玛卡适用人群"  href="#syrq">玛卡适用人群</A>| <A title="专家答疑"  href="#zjdy">专家答疑</A>| <A title="权威认证"  href="#qwrz">权威认证</A>| <A title="专家说"  href="#zjs">专家说</A>| <A title="值得信赖"  href="#zdxl">值得信赖</A> | <A title="在线订购"  href="#wyhp">在线订购</A> </DIV>
  </DIV>
</DIV>
<SCRIPT type="text/javascript">
window.onscroll=function(){
	if ($(document).scrollTop() > 47)
	{
		//$("#pf_nav").show();
		$("#pf_nav").addClass('float');
	}else{
		//$("#pf_nav").hide();
		$("#pf_nav").removeClass('float');
	}
}
</SCRIPT>
<script type="text/javascript">
$(document).ready(function() {
	$('#jsCarousel').jsCarousel({ onthumbnailclick: function(src) { 
	// 可在这里加入点击图片之后触发的效果
	$("#overlay_pic").attr('src', src);
	$(".overlay").show();
	}, autoscroll: true });
	
	$(".overlay").click(function(){
		$(this).hide();
	});
});
</script>
<div class="banner"></div>
<SCRIPT language=javascript>
function charLeftAll(n)
{
    if(n < 10)
        return "0" + n;
    else
        return n;
}
function show_student163_time(){
 window.setTimeout("show_student163_time()", 1000);
 BirthDay=new Date("06-06-2015");//改成你的计时日期
 today=new Date();
 timeold=(BirthDay.getTime()-today.getTime());
 sectimeold=timeold/1000
 secondsold=Math.floor(sectimeold);
 msPerDay=24*60*60*1000
 e_daysold=timeold/msPerDay
 daysold=Math.floor(e_daysold);
 e_hrsold=(e_daysold-daysold)*24;
 hrsold=Math.floor(e_hrsold);
 e_minsold=(e_hrsold-hrsold)*60;
 minsold=Math.floor((e_hrsold-hrsold)*60);
 seconds=Math.floor((e_minsold-minsold)*60);
 $('#span_dt_dt').html("<em>"+charLeftAll(daysold)+"</em><em>"+charLeftAll(hrsold)+"</em><em>"+charLeftAll(minsold)+"</em><em>"+charLeftAll(seconds)+"</em>");
 
}
show_student163_time();
</SCRIPT>
<div class="activity">
  <div class="titlebar">
    <h1>玛卡益康，过年回家，爽到底！平均3.65元/粒！限时抢购！</h1>
  </div>
  <div class="content">
    <div class="countdown">
      <div class="time"> <span id="span_dt_dt"></span> </div>
    </div>
    <div class="yd"> <img title="药店有售" src="/Public/pcmaka/images/activity_01.jpg" /> <img title="天猫药店同款" src="/Public/pcmaka/images/activity_02.jpg" /> </div>
  </div>
</div>
<div class="contain">
  <div class="blmk" id="blmk" name="blmk">
    <div class="titlebar">秘鲁玛卡——100%秘鲁进口高品质玛卡，纯天然绿色无添加</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/blmk_01.jpg" /> <img title="吸收率高" src="/Public/pcmaka/images/blmk_02.jpg" /> </div>
  </div>
  <div class="mkyk" id="mkyk" name="mkyk">
    <div class="titlebar">玛卡益康</div>
    <div class="content"> <img title="纯度高达90%，够劲" src="/Public/pcmaka/images/mkyk_01.jpg" /> <img title="纯度高达90%，够劲 " src="/Public/pcmaka/images/mkyk_02.jpg" /> <img title="无依赖" src="/Public/pcmaka/images/mkyk_03.jpg" /> </div>
  </div>
  <div class="mkykgx" id="mkykgx" name="mkykgx">
    <div class="titlebar">玛卡益康咀嚼片的功效</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/mkykgx_01.jpg" /> <img title="" src="/Public/pcmaka/images/mkykgx_02.jpg" /> <img title="" src="/Public/pcmaka/images/mkykgx_03.jpg" /> </div>
  </div>
  <div class="qsyl" id="qsyl" name="qsyl">
    <div class="titlebar">玛卡强肾三重奏：阳刚男人，三步到位</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/qsyl_01.jpg" /> <img title="" src="/Public/pcmaka/images/qsyl_02.jpg" /> <img title="" src="/Public/pcmaka/images/qsyl_03.jpg" /> </div>
  </div>
  <div class="shrq" id="syrq" name="syrq">
    <div class="titlebar">玛卡适用人群</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/shrq_01.jpg" /> <img title="" src="/Public/pcmaka/images/shrq_02.jpg" /> </div>
  </div>
  <div class="zjdy"  id="zjdy" name="zjdy">
    <div class="case1">用户感言</div>
    <div class="Guarantee">三大保证</div>
    <div class="Package">
      <div class="move1"> <a href="#wyhp"><img src="/Public/pcmaka/images/anniu.jpg" id="pf_nav" /></a> </div>
      <div class="move2"> <a href="#wyhp"><img src="/Public/pcmaka/images/anniu.jpg" id="pf_nav" /></a> </div>
      <div class="move3"> <a href="#wyhp"><img src="/Public/pcmaka/images/anniu.jpg" id="pf_nav" /></a> </div>
      <div class="move4"> <a href="#wyhp"><img src="/Public/pcmaka/images/anniu.jpg" id="pf_nav" /></a> </div>
    </div>
    <div class="titlebar">玛卡专家答疑，用心解答您的每一个疑惑</div>
    <div class="content">
      <div class="dy">
        <DIV class="dy_main">
          <DL>
            <DT><SPAN>sasa：</SPAN>40岁的男人可以吗？</DT>
            <DD><SPAN>专家解答：</SPAN>您好，感谢您对玛卡益康咀嚼片的关注！是可以使用的。建议您将您身体的详细情况拨打全国免费健康热线：400-666-5145，或咨询在线健康顾问，健康顾问会全面了解您身体的情况，针对性的介绍适合您的套装，帮助您尽早改善好身体。祝您早日康复！ </DD>
          </DL>
        </DIV>
        <DIV class="dy_main">
          <DL>
            <DT><SPAN>小朋：</SPAN>经常早泄，坚持不到三分钟，而且每晚只有一次房事，都力不从心，平均每月最多7天。</DT>
            <DD><SPAN>专家解答：</SPAN>您好，感谢您对于玛卡益康咀嚼片的关注！您情况考虑得有男性性功能障碍，性功能障碍包括：性欲减退，勃起功能障 碍、性高潮和射精功能障碍、阴茎疲软功能障碍，您的情况建议选择A款?强硬男人黄金装，产品通过“活肾、氧肾、补肾”三大关键激活肾脏自我修复能力， 温润肾虚，改善肾疲劳，打破年龄界限，50岁如20岁一样强硬，提高性生活质量！详情可咨询在线健康顾问，我们将竭诚为您服务，并给到您宝贵建议！祝您生 活愉快！ </DD>
          </DL>
        </DIV>
        <DIV class="dy_main">
          <DL>
            <DT><SPAN>小赵：</SPAN>做爱时间太短了，怎么办</DT>
            <DD><SPAN>专家解答：</SPAN>您好，感谢您对玛卡益康咀嚼片的关注！是可以使用的。产品通过“活肾、氧肾、补肾”三大关键激活肾脏自我修复能力，温润肾虚， 改善肾疲劳，打破已往时间记录，提高性生活质量！如需了解产品详情或者订购请拨打全国免费健康热线：400-666-5145，或咨询在线健康顾问，健康顾问会全面了解您身体的情况，针对性的介绍适合您的套装，帮助您尽早改善好身体。祝您早日康复！ </DD>
          </DL>
        </DIV>
        <DIV class="dy_main">
          <DL>
            <DT><SPAN>NBA：</SPAN>我今年50岁了，年轻的时候有过手淫，这么多年性生活总是几分钟现在想使用你们的产品能处理好吗。</DT>
            <DD><SPAN>专家解答：</SPAN>您好，感谢您对玛卡益康咀嚼片的关注！手淫是一种严重损伤身体精神的行为.手淫所消费的是“精”,也就是与骨髓,脑 髓相通的肾所收藏的人体的奉生之本,造血之源.过度耗精会导致骨髓空洞,脑髓不满,生命提前衰老,夭折,身体的极度虚弱反而是次要的表现；身体的机能下 降。建议您使用我们的玛卡益康咀嚼片来改善您的情况！详情请拨打全国免费健康热线：400-666-5145，或咨询在线健康顾问，健康顾问会全面了解您身体的情况，针对性的介绍适合您的套装，帮助您尽早改善好身体。祝您早日康复！ </DD>
          </DL>
        </DIV>
        <DIV class="dy_main">
          <DL>
            <DT><SPAN>我爱你：</SPAN>你好，我有手淫的习惯，现在阳痿早泄都有。你们的产品管用吗</DT>
            <DD><SPAN>专家解答：</SPAN>您好，感谢您对玛卡益康咀嚼片的关注！我们男性出现阳痿早泄等问题，主要是肾功能出现障碍，因此，想要解决这些问 题，就需要调理并保护好我们的肾脏功能。建议您使用我们的玛卡益康咀嚼片来改善您的情况！建议您与我们在线健康顾问联系或拨打全国免费健康热线：400-666-5145，或咨询在线健康顾问，健康顾问会全面了解您身体的情况，针对性的介绍适合您的套装，帮助您尽早改善好身体。祝您早日康复！ </DD>
          </DL>
        </DIV>
      </div>
    </div>
  </div>
  <div class="qwrz" id="qwrz" name="qwrz">
    <div class="titlebar">玛卡权威认证</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/qwrz_01.jpg" /> <img title="" src="/Public/pcmaka/images/qwrz_02.jpg" /> <img title="" src="/Public/pcmaka/images/qwrz_03.jpg" /> <img title="" src="/Public/pcmaka/images/qwrz_04.jpg" />
      <div class="qwzs">
        <div class="overlay"><img src="/Public/pcmaka/images/zs_1.jpg" id="overlay_pic"></div>
        <div id="wrapper">
          <div id="jsCarousel">
            <div> <img src="/Public/pcmaka/images/zs_1.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_2.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_3.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_4.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_5.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_6.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_7.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_8.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_9.jpg" /> </div>
            <div> <img src="/Public/pcmaka/images/zs_10.jpg" /> </div>
          </div>
          <div id="demo-side-bar"> </div>
        </div>
      </div>
      <img title="" src="/Public/pcmaka/images/qwrz_06.jpg" /> </div>
  </div>
  <div class="zjs" id="zjs" name="zjs">
    <div class="titlebar">全球专家说“玛卡”</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/zjs_01.jpg" /> <img title="" src="/Public/pcmaka/images/zjs_02.jpg" /> </div>
  </div>
  <div class="zdxl" id="zdxl" name="zdxl">
    <div class="titlebar">好东西值得信赖！</div>
    <div class="content"> <img title="" src="/Public/pcmaka/images/zdxl_01.jpg" /> <img title="" src="/Public/pcmaka/images/zdxl_02.jpg" /> <img title="" src="/Public/pcmaka/images/zdxl_03.jpg" /> </div>
  </div>
  <div class="wyhp" id="wyhp" name="wyhp">
    <div class="titlebar">在线订购</div>
    <div class="order_02">
      <script>   
		 
$(function(){
		$("#changeCode").on("click",function(){
				var mySrc="/mk/Verify/getVerifyCode?"+Math.random();
				$("#codeImg").attr("src",mySrc);
				
			

	});

});
function phpsys_update_code(a){
	a.src="/mk/Verify/getVerifyCode?"+Math.random();
}

/* 表单判断 */
function mycheck(){
	var isMobile = /^(?:13\d|15\d|18\d)\d{5}(\d{3}|\*{3})$/; //手机号码验证规则
	var isPhone = /^((0\d{2,3})-)?(\d{7,8})(-(\d{3,}))?$/;   //座机验证规则
	var tel = document.form1.contact.value;
	if(document.form1.name.value ==""){
		alert("您的姓名不能为空！");
		document.form1.name.focus();
		return false;
	}
	if(tel ==""){
		alert("联系电话不能为空！");
		document.form1.contact.focus();
		return false;
	}
	if(!isMobile.test(tel) && !isPhone.test(tel)){ //如果用户输入的值不同时满足手机号和座机号的正则
		alert("请正确填写电话号码，例如:13415764179或020-61396139");  //就弹出提示信息
		document.form1.contact.focus();
		return false; //返回一个错误，不向下执行
	}
	if(document.form1.prov.value == "" || document.form1.prov.value == "请选择"){
		alert("城市不能为空！");
		document.form1.prov.focus();
		return false;
	}
	if(document.form1.city.value == "" || document.form1.city.value == "请选择"){
		alert("地区不能为空！");
		document.form1.city.focus();
		return false;
	}
	return false;
	
}

//得到地区码
function getAreaID(){
	var area = 0;          
	if($("#dist").val() != "0"){
		area = $("#dist").val();                
	}else if ($("#cityselect").val() != "0"){
		area = $("#cityselect").val();
	}else{
		area = $("#prov").val();
	}
	return area;
}

//根据地区码查询地区名
function getAreaNamebyID(areaID){
	var areaName = "";
	if(areaID.length == 2){
		areaName = area_array[areaID];
	}else if(areaID.length == 4){
		var index1 = areaID.substring(0, 2);
		areaName = area_array[index1] + " " + sub_array[index1][areaID];
	}else if(areaID.length == 6){
		var index1 = areaID.substring(0, 2);
		var index2 = areaID.substring(0, 4);
		areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
	}
	return areaName;
}
$(document).ready(function() {
	$('.prov').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
	});
	$('.cityselect').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
		
	});
	$('.dist').blur(function(){
		//地区码
		var areaID = getAreaID();
		//地区名
		var areaName = getAreaNamebyID(areaID) ;
		if(areaName != '请选择'){
			$('.address').val(areaName);
		}
	});
	initComplexArea('prov', 'cityselect', 'dist', area_array, sub_array, '0', '0', '0');
});
    </script>
      <form method="post" action="/mk/SubOrder/submit"  style="width:528px; height:500px; margin:0 auto; _margin-left:316px;" onsubmit="return mycheck()" name="form1">
        <label>
          <select name="productid" id="productid" style="width:264px; height:26px; font-size:12px; color:#a30c1f;">
            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>" style="color:#000000;"><?php echo ($vo["productname"]); ?>  ￥<?php echo ($vo["price"]); ?></option><?php endforeach; endif; ?>
          </select>
        </label>
        <label>
          <input type="text" name="name" value=""  id="name" style="width:260px; height:26px; background:none; border:0px; margin-left:4px; margin-top:32px; _margin-top:40px;" />
        </label>
        <label>
          <input type="text" name="contact" id="contact" value="" style="width:260px; height:26px; background:none; border:0px; margin-left:4px; margin-top:30px; _margin-top:26px;" />
        </label>
		<div class="city">
			<select class="prov" id="prov" name="prov" onChange="changeComplexProvince(this.value, sub_array, 'cityselect', 'dist');"></select> 
			<select id="cityselect" class="city cityselect" name="cityselect" onChange="changeCity(this.value,'dist','dist');"></select>
			<select class="dist" id="dist" name="dist"></select>
		</div>	
        <label>
          <input type="text" name="address" id="address" class="address" value="" style="width:260px; height:26px; background:none; border:0px; margin-left:4px; margin-top:30px; _margin-top:28px;" />
          <input type="text" name="ddhh" id="ddhh" value=""   style=" display:none;" />
        </label>
        <br />
        <label>
          <input type="radio" name="payment" id="payment" value="货到付款" checked style=" height:18px; width:18px; margin-top:37px; margin-left:20px; _margin-top:30px;"/>
        </label>
        <br />
        <label>
          <input name="verify" id="verify" type="text" style="width:150px; height:26px; background:none; border:0px; margin-left:4px; margin-top:36px; _margin-top:31px;" />
          <span id="phpsys_update_code" ><img src="/mk/Verify/getVerifyCode" border="0" align="absmiddle" style="width:100px;height:28px;" style="cursor:pointer;" onclick="phpsys_update_code(this)" id="codeImg" > <a style="color:white" href="javascript:void();" id="changeCode" >看不清?</a> </span> </label>
        <br />
        <label>
          <textarea name="word" id="word" style="background:none; width:455px; height:190px; border:0px; margin-top:35px; margin-left:5px; "></textarea>
        </label>
        <br />
        <label>
          <input type="submit" name="Submit" value="" style="width:120px; height:30px; margin-left:100px; margin-top:103px; background:none; cursor:pointer; border:0px; _margin-top:108px;" />
        </label>
		<input type="hidden" value="PC" name="client"  />
        <br />
        <label>
          <input type="reset" name="Submit2" value="" style="width:120px; height:30px; margin-left:244px; position:relative; top:-33px; margin-top:0px; background:none; cursor:pointer; border:0px;" />
        </label>
      </form>
      <div class="scroll">
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
        "金小姐 ","张先生 ","伍小姐 ","黄先生","余先生 ","顾先生 ","胡小姐 ","万小姐 ","欧先生 ","魏先生 ","宋小姐 ","曲小姐 ",
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
        <div id='xdemo' style="overflow: hidden; height:245px; width:260px; line-height:30px;margin:0 auto; font-size:12px;" >
          <div id='xdemo1'></div>
          <div id='xdemo2'></div>
        </div>
      </div>
    </div>
    <div class="Guarantee_01">五大售后保障</div>
  </div>
</div>
<div class="footer">Copyright &copy; 2011-2015 版权所有 翻版必究 &nbsp;&nbsp;&nbsp; 粤ICP备14090790号</div>
<a href="#0" class="cd-top">Top</a>
<div class="buttom"></div>
<!-- WPA Button Begin -->
<script charset="utf-8" type="text/javascript" src="http://wpa.b.qq.com/cgi/wpa.php?key=XzkzODAxNjc4Nl8yNTU2ODhfNDAwODg1NjgzNl8"></script>
<!-- WPA Button End -->
<script language=javascript>
var LiveAutoInvite0='您好，来自%IP%的朋友';
var LiveAutoInvite1='来自首页的对话';
var LiveAutoInvite2=' 网站商务通 主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
</script>
<script language="javascript" src="http://ala.zoossoft.com/JS/LsJS.aspx?siteid=ALA96738846&float=1&lng=cn"></script>
</body>
</html>