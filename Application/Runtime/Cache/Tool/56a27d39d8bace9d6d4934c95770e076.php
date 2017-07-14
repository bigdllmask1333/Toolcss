<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<title>工具界-CssNb</title>
	<meta name="keywords" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具" />
		<meta name="description" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具">
	<script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
	<link href="//cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/statics/self/css/main.css">
	<script type="text/javascript" src="/Public/statics/format/jshtml/base.js"></script>
	<script type="text/javascript" src="/Public/statics/format/jshtml/htmlformat.js"></script>
	<script type="text/javascript" src="/Public/statics/format/jshtml/jsformat.js"></script>
	<!--<script src="http://7bv9ya.com1.z0.glb.clouddn.com/jquery.cookie.js"></script>-->
</head>
<body>
<div class="container-fluid">
	<div class="navs">
	<nav class="navbar navbar-default">
	<!-- <nav class="navbar navbar-inverse">   黑色 --> 
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo U('Tool/index/index');?>">公猪界</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="[erweima]"> <a href="<?php echo U('Tool/index/twoma');?>">二维码生成<span class="sr-only">(current)</span></a></li>
	        <!-- <li><a href="#">翻译 <span class="sr-only">(current)</span></a></li> -->
	        <li class="active">
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">编码/加密 <span class="caret"></span></a>
	        	<ul class="dropdown-menu">
		        	<li><a href="<?php echo U('Tool/mi/mi5');?>">MD5加密工具</a></li>
		        	<li><a href="<?php echo U('Tool/mi/urlmi');?>">URL网址16进制加密工具</a></li>
		        	<li><a href="<?php echo U('Tool/mi/escapemi');?>">Escape加密/解密工具</a></li>
	        	</ul>
        	</li>
	        <li    class="dropdown [keywords]">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">格式化 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo U('Tool/format/jshtml_format');?>">Javascript/HTML压缩、格式化</a></li>
	            <li><a href="<?php echo U('Tool/format/csszip');?>">CSS压缩、格式化</a></li>
	            <li><a href="<?php echo U('Tool/format/xmlzip');?>">XML压缩、格式化</a></li>
	            <li role="separator" class="divider"></li>
	            <!-- <li><a href="#">SQL压缩、格式化</a></li> -->
	            <li><a href="<?php echo U('Tool/format/jsons');?>">JSON 在线解析工具</a></li>
<!-- 		            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li> -->
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li>
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文档<span class="caret"></span></a>
				
		        <ul class="dropdown-menu">
		            <li><a href="http://www.bejson.com/apidoc/jquery/" target="_blank">JQuery文档</a></li>
		            <li><a href="http://v3.bootcss.com/components/" target="_blank">Bootstrap文档</a></li>
		            <li><a href="https://cn.vuejs.org/v2/api/" target="_blank">vuejs</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="http://wiki.open.qq.com/wiki/%E9%A6%96%E9%A1%B5" target="_blank">腾讯开发平台</a></li>
		            <li><a href="https://mp.weixin.qq.com/wiki" target="_blank">微信公众平台开发文档</a></li>
		            <li><a href="https://pay.weixin.qq.com/wiki/doc/api/index.html" target="_blank">微信支付开发文档</a></li>
		             <li role="separator" class="divider"></li>
		            <li><a href="http://open.taobao.com/doc2/apiList.htm" target="_blank">淘宝开发文档</a></li>
		            <li><a href="https://doc.open.alipay.com/doc2/alipayDocIndex.htm" target="_blank">支付宝开发文档</a></li>
		            <li><a href="https://docs.open.alipay.com/399" target="_blank">支付宝开发商文档</a></li>
		             <li role="separator" class="divider"></li>
		            <li><a href="http://www.runoob.com/try/bootstrap/layoutit/" target="_blank">Bootstrap可视化布局</a></li>
		            <li><a href="http://cssnb.com/iframe/rgb/rgb.html" target="_blank">RGB颜色对照表</a></li>
		        </ul>
	        </li>
	        <li class="dropdown [more]">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多	 <span class="caret"></span></a>
	           <ul class="dropdown-menu">
		            <li><a href="<?php echo U('Tool/more/zishu');?>">字数统计工具</a></li>
		         <!--    <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li> -->
		            <li role="separator" class="divider"></li>
		            <li><a href="<?php echo U('Tool/more/fanyimi');?>">英汉互译</a></li>
		        </ul>
	        </li>
	        <li><a href="http://cssnb.com/iframe/woman/chatwoman.html" target="_blank">美人儿<span class="sr-only">(current)</span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
	<!-- <p class="bg-warning msgs">...</p> -->
	<div class="left_kuang">
		<div class="left_main">
			<div class="min-title">
				<h1>MD5加密工具</h1>
			    <!-- <h3>请在下框输入您要转换的内容:</h3>   -->
			</div>
			<!-- /工具开始 -->
			<h3>请输入欲加密的字符串：</h3>
			<input name="text" class="tooltext form-control" id="test" value="123456" size="69" style="margin-bottom: 20px;">
			<input onclick="ye.value=hex_md5(test.value).substring(8,24)" type="button" value="16位小写" class="btn btn-danger">
			<input onclick="ye.value=hex_md5(test.value).substring(8,24).toUpperCase()" type="button" value="16位大写" class="btn btn-warning">
			<input onclick="ye.value=hex_md5(test.value)" type="button" value="32位小写" class="btn btn-info">
			<input onclick="ye.value=hex_md5(test.value).toUpperCase()" type="button" value="32位大写" class="btn btn-success">
			<br /><br /><h3>转换后的MD5密文:</h3>
			<textarea id="ye" name="MD5Text" class="toolarea form-control" rows="3" style="padding:4px;color:#333;display:block;font-size:24px" >e10adc3949ba59abbe56e057f20f883e</textarea>
			小贴士：md5加密是一种不可逆的加密算法。
		</div>
	</div>
	<div class="right_kuang" >
	<div class="right_main">
		<!-- <strong><center><h4>最新更新</h4></center></strong> -->
		<div class="panel-heading"><h3 class="widget-title panel-title">最新更新</h3></div>
		<!-- <hr> -->
		<div style="margin-left: 15px"><p><a href="<?php echo U('Tool/format/jshtml_format');?>">Javascript/HTML压缩、格式化</a></p>
		<p><a href="<?php echo U('Tool/format/jsons');?>">JSON 在线解析工具</a></p>
		<p><a href="<?php echo U('Tool/more/fanyimi');?>">英汉互译</a></p>
		<p><a href="<?php echo U('Tool/format/xmlzip');?>">XML压缩、格式化</a></p>
		<p><a href="<?php echo U('Tool/format/csszip');?>">CSS压缩、格式化</a></p></div>
	</div> 
	<div class="right_main">
		
		<div class="panel-heading"><h3 class="widget-title panel-title">实时热点<span style="float:right;font-size: 10px;margin-top: 10px">搜索指数</span></h3></div>
		<ul class="list-group">
		    <li class="list-group-item" style="border:none;background: none"><?php echo ($news['content'][1]); ?><span style="float:right"><?php echo ($news['num'][1]); ?>次</span></li>
			<li class="list-group-item" style="border:none;background: none"><?php echo ($news['content'][2]); ?><span style="float:right"><?php echo ($news['num'][2]); ?>次</span></li>
			<li class="list-group-item" style="border:none;background: none"><?php echo ($news['content'][3]); ?><span style="float:right"><?php echo ($news['num'][3]); ?>次</span></li>
			<li class="list-group-item" style="border:none;background: none"><?php echo ($news['content'][4]); ?><span style="float:right"><?php echo ($news['num'][4]); ?>次</span></li>
			<li class="list-group-item" style="border:none;background: none"><?php echo ($news['content'][5]); ?><span style="float:right"><?php echo ($news['num'][5]); ?>次</span></li>
		</ul>

	</div>
	<div class="right_main_min">
		<div class="panel-heading"><h3 class="widget-title panel-title">每日说说：</h3></div>
		<div style="margin-left: 15px"><p><h6>我用心去写代码,只为寻觅一个懂我的人！</h6></p></div> 

	</div>
</div>
	<div class="button_main">
	<div class="panel panel-default friend-link yinyin">
		<div class="panel-heading">友情链接（互换友链联系QQ1113249273，接受程序博客相关站点）</div>
		<div class="panel-body">
		    <a href="http://forum.laravelacademy.org" title="Laravel学院后花园和讨论区" target="_blank">Laravel学堂</a>&nbsp;&nbsp;
		    <a href="http://www.phpchina.com" title="最棒的PHP中文社区" target="_blank">PHPChina</a>&nbsp;
		    <!--<a href="http://laravel.so" title="Laravel技巧" target="_blank">Laravel.so</a>&nbsp;--> 
		    <a href="http://www.yuansir-web.com" title="Yuansir-web菜鸟|LNMP学习笔记" target="_blank">Yuansir-web菜鸟</a>&nbsp; 
		    <a href="https://www.insp.top" title="灵感-来自生活的馈赠" target="_blank">Inspirer</a>&nbsp; 
		    <a href="http://www.zhangxihai.cn" title="神奇的胖子" target="_blank">神奇的胖子</a>&nbsp;
		    <a href="http://www.chenruixuan.com" title="天宝寺||陈瑞轩" target="_blank">天宝寺||陈瑞轩</a>&nbsp;
		    <a href="http://www.uncletoo.com" title="专注PHP技术推广" target="_blank">UncleToo</a>&nbsp;
		    <a href="http://www.nginx.cn" title="Nginx中文站" target="_blank">Nginx中文站</a>&nbsp;
		    <a href="http://www.phpxs.com" title="编织未来 成就梦想" target="_blank">PHP新手</a>&nbsp;
		    <a href="https://laravist.com" title="Laravel Artist For Web Development" target="_blank">Laravist</a>&nbsp;
		    <a href="https://www.shiyanlou.com" title="第一家以实验为核心的IT在线教育平台" target="_blank">实验楼</a>&nbsp;
		    <a href="http://9iphp.com" title="All time is no time when it is past" target="_blank">Specs’ Blog</a>&nbsp;
		    <a href="http://yii-china.com" title="Yii中文网" target="_blank">Yii中文网</a>&nbsp;
		    <a href="http://www.joyphper.net" title="一个分享个人学习、开发经验的Blog" target="_blank">PHP爱好者</a>&nbsp;
		    <a href="http://www.daixiaorui.com" title="专注于PHP学习，PHP源码分享" target="_blank">PHP学习</a>&nbsp;
		    <a href="http://www.phpddt.com" title="关注PHP开发，提供原创PHP教程" target="_blank">PHP点点通</a>&nbsp;
		    <a href="http://www.phpsong.com" title="一个php程序猿分享的经验" target="_blank">小松博客</a>&nbsp;
		    <a href="http://www.itcast.cn/php" title="传智播客PHP学院" target="_blank">PHP培训</a>&nbsp;
		    <a href="http://www.91qingmai.com" title="互联网项目实训领导者" target="_blank">青麦学院</a>&nbsp;
		    <a href="http://www.gouguoyin.cn" title="挨踢男的葵花宝典" target="_blank">够过瘾</a>&nbsp;
		    <a href="http://www.5ibc.net/" title="专注PHP程序员一站式免费学习教程" target="_blank">PHP教程</a>&nbsp;
		<a href="http://www.webyang.net/" title="AndyYang的技术博客" target="_blank">WebYang.NET</a>&nbsp;
		    <a href="http://notes.cribug.com/" title="Cribug's Notes" target="_blank">Cribug's Notes</a>&nbsp;
		<a href="http://www.jsout.com/" title="专注Web前端开发" target="_blank">前端汇</a>&nbsp;
		    <a href="https://www.phpxy.com/" title="PHP学院" target="_blank">PHP学院</a>&nbsp;  
		    <a href="http://www.php-z.com/" title="PHP开发者技术交流社区" target="_blank">PHP-Z</a>&nbsp;
		    <a href="http://blog.tanteng.me/" title="一个专注现代化PHP开发的博客" target="_blank">小谈博客</a>&nbsp;
		    <a href="http://www.iwanli.me/" title="i晚黎博客致力于提供优质学习资源,分享个人笔记" target="_blank">i晚黎</a>&nbsp;
		    <a href="https://easywechat.org/" title="让微信开发更简单" target="_blank">EasyWeChat</a>&nbsp; 
		    <a href="http://baijunyao.com/" title="白俊遥博客" target="_blank">白俊遥博客</a>&nbsp;
		    <a href="http://www.maijindou.com/" title="magento" target="_blank">Magento</a>&nbsp;
		    <a href="http://blog.moocfans.cn/" title="慕课爱好者的博客" target="_blank">MoocFans</a>&nbsp;
		<a href="http://www.mysubmail.com" title="短信平台" target="_blank">短信平台</a>&nbsp;
		    <a href="https://www.getweapp.com" title="微信小程序学习社群" target="_blank">微信小程序学习社群</a>&nbsp;
		<a href="http://blog.lanyus.com/" title="PhpStorm破解" target="_blank">ilanyu's Blog</a>&nbsp;
		<a href="http://www.pythontab.com" title="Python中文学习社区" target="_blank">Python</a>&nbsp;
		    <a href="http://unun.in/" title="书生程序员" target="_blank">书生程序员</a>&nbsp;
		    <a href="https://www.96qbhy.com/" title="桥边红药的博客" target="_blank">桥边红药的博客</a>&nbsp;
		</div>
	</div>
</div>
</div>
<script>
	var hexcase = 0;  /* hex output format. 0 - lowercase; 1 - uppercase        */
	var b64pad  = ""; /* base-64 pad character. "=" for strict RFC compliance   */
	var chrsz   = 8;  /* bits per input character. 8 - ASCII; 16 - Unicode      */
	/*
	* These are the functions you’ll usually want to call
	* They take string arguments and return either hex or base-64 encoded strings
	*/
	function hex_md5(s){ return binl2hex(core_md5(str2binl(s), s.length * chrsz));}
	function b64_md5(s){ return binl2b64(core_md5(str2binl(s), s.length * chrsz));}
	function hex_hmac_md5(key, data) { return binl2hex(core_hmac_md5(key, data)); }
	function b64_hmac_md5(key, data) { return binl2b64(core_hmac_md5(key, data)); }
	/* Backwards compatibility - same as hex_md5() */
	function calcMD5(s){ return binl2hex(core_md5(str2binl(s), s.length * chrsz));}
	/*
	* Perform a simple self-test to see if the VM is working
	*/
	function md5_vm_test()
	{
	return hex_md5("abc") == "900150983cd24fb0d6963f7d28e17f72";
	}
	/*
	* Calculate the MD5 of an array of little-endian words, and a bit length
	*/
	function core_md5(x, len)
	{
	/* append padding */
	x[len >> 5] |= 0x80 << ((len) % 32);
	x[(((len + 64) >>> 9) << 4) + 14] = len;
	var a =  1732584193;
	var b = -271733879;
	var c = -1732584194;
	var d =  271733878;
	for(var i = 0; i < x.length; i += 16)
	{
	var olda = a;
	var oldb = b;
	var oldc = c;
	var oldd = d;
	a = md5_ff(a, b, c, d, x[i+ 0], 7 , -680876936);
	d = md5_ff(d, a, b, c, x[i+ 1], 12, -389564586);
	c = md5_ff(c, d, a, b, x[i+ 2], 17,  606105819);
	b = md5_ff(b, c, d, a, x[i+ 3], 22, -1044525330);
	a = md5_ff(a, b, c, d, x[i+ 4], 7 , -176418897);
	d = md5_ff(d, a, b, c, x[i+ 5], 12,  1200080426);
	c = md5_ff(c, d, a, b, x[i+ 6], 17, -1473231341);
	b = md5_ff(b, c, d, a, x[i+ 7], 22, -45705983);
	a = md5_ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
	d = md5_ff(d, a, b, c, x[i+ 9], 12, -1958414417);
	c = md5_ff(c, d, a, b, x[i+10], 17, -42063);
	b = md5_ff(b, c, d, a, x[i+11], 22, -1990404162);
	a = md5_ff(a, b, c, d, x[i+12], 7 ,  1804603682);
	d = md5_ff(d, a, b, c, x[i+13], 12, -40341101);
	c = md5_ff(c, d, a, b, x[i+14], 17, -1502002290);
	b = md5_ff(b, c, d, a, x[i+15], 22,  1236535329);
	a = md5_gg(a, b, c, d, x[i+ 1], 5 , -165796510);
	d = md5_gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
	c = md5_gg(c, d, a, b, x[i+11], 14,  643717713);
	b = md5_gg(b, c, d, a, x[i+ 0], 20, -373897302);
	a = md5_gg(a, b, c, d, x[i+ 5], 5 , -701558691);
	d = md5_gg(d, a, b, c, x[i+10], 9 ,  38016083);
	c = md5_gg(c, d, a, b, x[i+15], 14, -660478335);
	b = md5_gg(b, c, d, a, x[i+ 4], 20, -405537848);
	a = md5_gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
	d = md5_gg(d, a, b, c, x[i+14], 9 , -1019803690);
	c = md5_gg(c, d, a, b, x[i+ 3], 14, -187363961);
	b = md5_gg(b, c, d, a, x[i+ 8], 20,  1163531501);
	a = md5_gg(a, b, c, d, x[i+13], 5 , -1444681467);
	d = md5_gg(d, a, b, c, x[i+ 2], 9 , -51403784);
	c = md5_gg(c, d, a, b, x[i+ 7], 14,  1735328473);
	b = md5_gg(b, c, d, a, x[i+12], 20, -1926607734);
	a = md5_hh(a, b, c, d, x[i+ 5], 4 , -378558);
	d = md5_hh(d, a, b, c, x[i+ 8], 11, -2022574463);
	c = md5_hh(c, d, a, b, x[i+11], 16,  1839030562);
	b = md5_hh(b, c, d, a, x[i+14], 23, -35309556);
	a = md5_hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
	d = md5_hh(d, a, b, c, x[i+ 4], 11,  1272893353);
	c = md5_hh(c, d, a, b, x[i+ 7], 16, -155497632);
	b = md5_hh(b, c, d, a, x[i+10], 23, -1094730640);
	a = md5_hh(a, b, c, d, x[i+13], 4 ,  681279174);
	d = md5_hh(d, a, b, c, x[i+ 0], 11, -358537222);
	c = md5_hh(c, d, a, b, x[i+ 3], 16, -722521979);
	b = md5_hh(b, c, d, a, x[i+ 6], 23,  76029189);
	a = md5_hh(a, b, c, d, x[i+ 9], 4 , -640364487);
	d = md5_hh(d, a, b, c, x[i+12], 11, -421815835);
	c = md5_hh(c, d, a, b, x[i+15], 16,  530742520);
	b = md5_hh(b, c, d, a, x[i+ 2], 23, -995338651);
	a = md5_ii(a, b, c, d, x[i+ 0], 6 , -198630844);
	d = md5_ii(d, a, b, c, x[i+ 7], 10,  1126891415);
	c = md5_ii(c, d, a, b, x[i+14], 15, -1416354905);
	b = md5_ii(b, c, d, a, x[i+ 5], 21, -57434055);
	a = md5_ii(a, b, c, d, x[i+12], 6 ,  1700485571);
	d = md5_ii(d, a, b, c, x[i+ 3], 10, -1894986606);
	c = md5_ii(c, d, a, b, x[i+10], 15, -1051523);
	b = md5_ii(b, c, d, a, x[i+ 1], 21, -2054922799);
	a = md5_ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
	d = md5_ii(d, a, b, c, x[i+15], 10, -30611744);
	c = md5_ii(c, d, a, b, x[i+ 6], 15, -1560198380);
	b = md5_ii(b, c, d, a, x[i+13], 21,  1309151649);
	a = md5_ii(a, b, c, d, x[i+ 4], 6 , -145523070);
	d = md5_ii(d, a, b, c, x[i+11], 10, -1120210379);
	c = md5_ii(c, d, a, b, x[i+ 2], 15,  718787259);
	b = md5_ii(b, c, d, a, x[i+ 9], 21, -343485551);
	a = safe_add(a, olda);
	b = safe_add(b, oldb);
	c = safe_add(c, oldc);
	d = safe_add(d, oldd);
	}
	return Array(a, b, c, d);
	}
	/*
	* These functions implement the four basic operations the algorithm uses.
	*/
	function md5_cmn(q, a, b, x, s, t)
	{
	return safe_add(bit_rol(safe_add(safe_add(a, q), safe_add(x, t)), s),b);
	}
	function md5_ff(a, b, c, d, x, s, t)
	{
	return md5_cmn((b & c) | ((~b) & d), a, b, x, s, t);
	}
	function md5_gg(a, b, c, d, x, s, t)
	{
	return md5_cmn((b & d) | (c & (~d)), a, b, x, s, t);
	}
	function md5_hh(a, b, c, d, x, s, t)
	{
	return md5_cmn(b ^ c ^ d, a, b, x, s, t);
	}
	function md5_ii(a, b, c, d, x, s, t)
	{
	return md5_cmn(c ^ (b | (~d)), a, b, x, s, t);
	}
	/*
	* Calculate the HMAC-MD5, of a key and some data
	*/
	function core_hmac_md5(key, data)
	{
	var bkey = str2binl(key);
	if(bkey.length > 16) bkey = core_md5(bkey, key.length * chrsz);
	var ipad = Array(16), opad = Array(16);
	for(var i = 0; i < 16; i++)
	{
	ipad[i] = bkey[i] ^ 0x36363636;
	opad[i] = bkey[i] ^ 0x5C5C5C5C;
	}
	var hash = core_md5(ipad.concat(str2binl(data)), 512 + data.length * chrsz);
	return core_md5(opad.concat(hash), 512 + 128);
	}
	/*
	* Add integers, wrapping at 2^32. This uses 16-bit operations internally
	* to work around bugs in some JS interpreters.
	*/
	function safe_add(x, y)
	{
	var lsw = (x & 0xFFFF) + (y & 0xFFFF);
	var msw = (x >> 16) + (y >> 16) + (lsw >> 16);
	return (msw << 16) | (lsw & 0xFFFF);
	}
	/*
	* Bitwise rotate a 32-bit number to the left.
	*/
	function bit_rol(num, cnt)
	{
	return (num << cnt) | (num >>> (32 - cnt));
	}
	/*
	* Convert a string to an array of little-endian words
	* If chrsz is ASCII, characters >255 have their hi-byte silently ignored.
	*/
	function str2binl(str)
	{
	var bin = Array();
	var mask = (1 << chrsz) - 1;
	for(var i = 0; i < str.length * chrsz; i += chrsz)
	bin[i>>5] |= (str.charCodeAt(i / chrsz) & mask) << (i%32);
	return bin;
	}
	/*
	* Convert an array of little-endian words to a hex string.
	*/
	function binl2hex(binarray)
	{
	var hex_tab = hexcase ? "0123456789ABCDEF" : "0123456789abcdef";
	var str = "";
	for(var i = 0; i < binarray.length * 4; i++)
	{
	str += hex_tab.charAt((binarray[i>>2] >> ((i%4)*8+4)) & 0xF) +
	hex_tab.charAt((binarray[i>>2] >> ((i%4)*8  )) & 0xF);
	}
	return str;
	}
	/*
	* Convert an array of little-endian words to a base-64 string
	*/
	function binl2b64(binarray)
	{
	var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
	var str = "";
	for(var i = 0; i < binarray.length * 4; i += 3)
	{
	var triplet = (((binarray[i   >> 2] >> 8 * ( i   %4)) & 0xFF) << 16)
	| (((binarray[i+1 >> 2] >> 8 * ((i+1)%4)) & 0xFF) << 8 )
	|  ((binarray[i+2 >> 2] >> 8 * ((i+2)%4)) & 0xFF);
	for(var j = 0; j < 4; j++)
	{
	if(i * 8 + j * 6 > binarray.length * 32) str += b64pad;
	else str += tab.charAt((triplet >> 6*(3-j)) & 0x3F);
	}
	}
	return str;
	}
</script>
</body>
</html>