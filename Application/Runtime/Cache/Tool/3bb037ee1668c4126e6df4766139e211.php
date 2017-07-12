<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<title>JSON 在线解析工具-^(*￣(oo)￣)^</title>
	<meta name="keywords" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具" />
		<meta name="description" content="在线,CSS,CSS 校验,格式化,xml转json 工具,在线工具,json视图,可视化,程序,服务器,域名注册,正则表达式,测试,在线json格式化工具,json 格式化,json格式化工具,json字符串格式化,json 在线查看器,json在线,json 在线验证,json tools online,在线文字对比工具">
	<script src="//cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/statics/layer/layer.js"></script>
	<link href="//cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="//cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/Public/statics/self/css/main.css">
	<link href="/Public/statics/self/css/theme.css" rel="stylesheet">
	<!--<script src="http://7bv9ya.com1.z0.glb.clouddn.com/jquery.cookie.js"></script>-->
</head>
<body>
	<div class="navs">
	<nav class="navbar navbar-default">
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
	        <li><a href="#">编码/加密 <span class="sr-only">(current)</span></a></li>
	        <!-- <li><a href="#">翻译 <span class="sr-only">(current)</span></a></li> -->
	        <li>
	        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">网络 <span class="caret"></span></a>
	        	<ul class="dropdown-menu">
		        	<li><a href="#">获取你的IP</a></li>
		        	<li><a href="#">获取IP信息</a></li>
		        	<li><a href="#">IP定位周边信息</a></li>
		        	<li><a href="#">获取您的浏览器信息</a></li>
		        	<li><a href="#">常用USER_AGENT</a></li>
		        	<li><a href="#">TCP/IP子网掩码计算换算</a></li>
	        	</ul>
        	</li>
	        <li    class="dropdown active">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">格式化 <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?php echo U('Tool/format/jshtml_format');?>">Javascript/HTML压缩、格式化</a></li>
	            <li><a href="<?php echo U('Tool/format/csszip');?>">CSS压缩、格式化</a></li>
	            <li><a href="#">XML压缩、格式化</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">SQL压缩、格式化</a></li>
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
		        </ul>
	        </li>
	        <li class="dropdown [more]">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多	 <span class="caret"></span></a>
	           <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="<?php echo U('Tool/more/fanyimi');?>">英汉互译</a></li>
		        </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
	<!-- <p class="bg-warning msgs">...</p> -->
	<div class="left_kuang">
		<div class="left_main" style="height: 600px;">
			<div class="min-title"	>
				<h1>JSON 在线解析 格式化工具</h1>
			</div>
			<iframe src="http://cssnb.com/iframe/jsoniframe/front53.html" style="width: 100%;height:85%;" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes"></iframe>
		</div>
	</div>
	<div class="right_kuang">
		<div class="right_main"></div>
		<div class="right_main"></div>
		<div class="right_main"></div>
	</div>
	<div class="buttons">
		
	</div>
</body>
</html>