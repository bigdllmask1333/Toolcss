<?php
namespace Common\Juheip;
header('Content-type:text/html;charset=utf-8');
class Ip{
// +----------------------------------------------------------------------
// | JuhePHP [ NO ZUO NO DIE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2010-2015 http://juhe.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: Juhedata <info@juhe.cn-->
// +----------------------------------------------------------------------
 
//----------------------------------
// IP地址调用示例代码 － 聚合数据
// 在线接口文档：http://www.juhe.cn/docs/1
//----------------------------------
 
 
 
//配置您申请的appkey

 
//************1.根据IP/域名查询地址************
function Ip_area($ip){
    $appkey = "b6f1f7ff71e746bd5a7ebd67be421936";
    $url = "http://apis.juhe.cn/ip/ip2addr";
    $params = array(
          "ip" => $ip,//需要查询的IP地址或域名
          "key" => $appkey,//应用APPKEY(应用详细页查询)
          "dtype" => "json",//返回数据的格式,xml或json，默认json
    );
    $paramstring = http_build_query($params);
    $content = $this->juhecurl($url,$paramstring);
    $result = json_decode($content,true);
    if($result){
        if($result['error_code']=='0'){
            return $result;
        }else{
            echo $result['error_code'].":".$result['reason'];
        }
    }else{
        echo "请求失败";
    }
}
//**************************************************
 
 
 
 
 
/**
 * 请求接口返回内容
 * @param  string $url [请求的URL地址]
 * @param  string $params [请求的参数]
 * @param  int $ipost [是否采用POST形式]
 * @return  string
 */
function juhecurl($url,$params=false,$ispost=0){
    $httpInfo = array();
    $ch = curl_init();
 
    curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
    curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
    curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
    curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if( $ispost )
    {
        curl_setopt( $ch , CURLOPT_POST , true );
        curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
        curl_setopt( $ch , CURLOPT_URL , $url );
    }
    else
    {
        if($params){
            curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
        }else{
            curl_setopt( $ch , CURLOPT_URL , $url);
        }
    }
    $response = curl_exec( $ch );
    if ($response === FALSE) {
        //echo "cURL Error: " . curl_error($ch);
        return false;
    }
    $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
    $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
    curl_close( $ch );
    return $response;
}

}