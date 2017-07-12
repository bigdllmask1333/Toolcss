<?php
namespace Tool\Controller;
use Think\Controller;
use Common\Juheip\Ip;
class IndexController extends Controller {
    public function index(){
    	import('Common.Juheip.Ip');
		$object = new Ip();
		$ip=get_client_ip();
    	$content=$object->Ip_area($ip);
    	$ipmsg=[
    		'ip'=>$ip,
    		'area'=>$content['result']['area'],
    		'location'=>$content['result']['location'],
    	];
    	$this->assign('ipmsg',$ipmsg);
        $this->display();
    }
}