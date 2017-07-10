<?php
namespace Tool\Controller;
use Think\Controller;
use Common\Fanyi\Fanyi;
class IndexController extends Controller {
    public function index(){
    	import('Common.Fanyi.Fanyi');
		$object = new Fanyi();
    	$content=$object->translate('我爱你', 'auto', 'en');
    	$this->assign('fanyi',$content);
        $this->display();
    }
}