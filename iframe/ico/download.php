<?php

/**
* icoMaker 在线生成ICO图标
* @Blog:http://blog.tqtqtq.com
* @Sina Blog:http://blog.sina.com.cn/flashalliance
* @author flashalliance
* @e_mail:flashalliance@126.com
*/

$filename = $_POST['filename'];
header("Content-Type:application/force-download");
header("Content-type:image/x-icon");
//目标文件favicon.ico
header("Content-Disposition:attachment;filename=favicon.ico");
//源文件$filename
readfile("$filename");

?>