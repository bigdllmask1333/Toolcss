<?PHP 

/**
* icoMaker 在线生成ICO图标
* @Blog:http://blog.tqtqtq.com
* @Sina Blog:http://blog.sina.com.cn/flashalliance
* @author flashalliance
* @e_mail:flashalliance@126.com
*/

$output = ""; 

if(isset($_GET['action'])&&$_GET['action'] == 'make'){ 
    if(isset($_FILES['upimage']['tmp_name']) && $_FILES['upimage']['tmp_name'] && is_uploaded_file($_FILES['upimage']['tmp_name'])){ 
        if($_FILES['upimage']['type']>204800){ 
            phpAlert("你上传的文件过大，最大不能超过200K。"); 
            exit(); 
        } 
        $fileext = array("image/pjpeg","image/jpeg","image/gif","image/x-png","image/png"); 
        if(!in_array($_FILES['upimage']['type'],$fileext)){ 
            phpAlert("你上传的文件格式不正确，仅支持 png, jpg, gif格式。"); 
            exit(); 
        } 
        if($im = @imagecreatefrompng($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromgif($_FILES['upimage']['tmp_name']) or $im = @imagecreatefromjpeg($_FILES['upimage']['tmp_name'])){ 
            $imginfo = @getimagesize($_FILES['upimage']['tmp_name']); 
            if(!is_array($imginfo)){ 
                phpAlert("图像格式错误！"); 
            } 
            switch($_POST['size']){ 
                case 1; 
                    $resize_im = @imagecreatetruecolor(16,16); 
                    $size = 16; 
                    break; 
                case 2; 
                    $resize_im = @imagecreatetruecolor(32,32); 
                    $size = 32; 
                    break; 
                case 3; 
                    $resize_im = @imagecreatetruecolor(48,48); 
                    $size = 48; 
                    break; 
                default; 
                    $resize_im = @imagecreatetruecolor(32,32); 
                    $size = 32; 
                    break; 
            } 
            imagecopyresampled($resize_im,$im,0,0,0,0,$size,$size,$imginfo[0],$imginfo[1]); 
            include "phpthumb.ico.php"; 
            $icon = new phpthumb_ico(); 
            $gd_image_array = array($resize_im); 
            $icon_data = $icon->GD2ICOstring($gd_image_array); 
            $filename = "temp/" . date("Ymdhis") . rand(1,1000) . ".ico"; 
            if(file_put_contents($filename, $icon_data)){ 
                $output = $filename; 
            } 

        }else{ 
            phpAlert("生成错误请重试！"); 
        } 

    }     

} 

function phpAlert($msg){
	echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>";
	echo "<script type=text/javascript>alert('$msg')</script>"; 
}
?> 

<!doctype html>
<html> 
<head> 
<title>在线生成ICO图标</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style> 
body{background-color: none;color:#000;font-family:arial;margin:30px;font-size:12px;} 
table{border:0} 
td{line-height:16px;} 
label{cursor:hand;}
a {color:#00f;} 
</style> 
</head> 
<body style="background-color: none"> 
<h1>在线生成ICO图标</h1> 

<table> 
    <tr> 
        <td><b>请上传你要转换的图片</b><br>支持格式 png，jpg，gif</td> 
    </tr> 
    <form action="?action=make" method="post" enctype='multipart/form-data'> 
    <tr> 
        <td><input type="file" name="upimage" size="30" ></td> 
    </tr> 
    <tr> 
        <td>目标尺寸： 
        <input type="radio" name="size" value="1" id="s1"><label for="s1">16*16</label> 
        <input type="radio" name="size" value="2" id="s2" checked><label for="s2">32*32</label> 
        <input type="radio" name="size" value="3" id="s3"><label for="s3">48*48</label> 
        </td> 
    </tr> 
    <tr> 
        <td align="right"><input type="submit" value="生　成"></td> 
    </tr> 
    </form>
    <?PHP 
    if($output){ 
        echo "<tr><td><form id='download' name='download' method='post' action='download.php' target='_blank'><input type='hidden' name='filename' id='filename' value='" . $output . "' /><div style='border:1px solid #eee;background-color:#fafafa;padding:10px'>生成成功！请点右键->另存为 保存到本地<br><a href='javascript:;' onclick='javascript:document.download.submit();'>点击下载</a></div></form></td></tr>"; 
    } 
    ?> 
</table> 
 
</body> 
</html>