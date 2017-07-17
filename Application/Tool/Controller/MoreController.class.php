<?php
namespace Tool\Controller;
use Think\Controller;
use Common\Fanyi\Fanyi;
class MoreController extends Controller {
    public function __construct() {
        parent::__construct();
        $news=news();
        $this->assign('news',$news);        

    }
    public function translate(){
    	// dump($_SESSION['yanzheng']);
    	// session('yanzheng',null);
    	if ($_SESSION['yanzheng']=='') {
    		redirect('/Tool/more/fanyimi');
    	}
    	if(IS_POST){
    		//引入接口调用类
    		import('Common.Fanyi.Fanyi');
			$object = new Fanyi();
    		$query=$_POST['query'];	
    		if(preg_match('/[a-zA-Z]/',$query)){
				$content=$object->translate($query, 'auto', 'zh');
			}else{
				$content=$object->translate($query, 'auto', 'en');
			}
	    	$data['msg']  = 'true';
			$data['content'] = $content['trans_result'][0]['dst'];
			$this->ajaxReturn($data);
    	}
        $this->display();
    }

    //翻译锁
    public function fanyimi(){
    	if ($_SESSION['yanzheng']!='') {
    		redirect('/Tool/more/translate');
    	}
    	if(IS_POST){
    		$psd=$_POST['psd'];
    		if ($psd=='cww0128') {
    			session('yanzheng','guo');
    			$data['msg']  = 'true';
    		}else{
    			$data['msg']  = 'false';
    		}
    		error_log("密码：".var_export($psd,true));
			// $data['content'] = $content['trans_result'][0]['dst'];
			$this->ajaxReturn($data);
    	}
    	$this->display();
    }
    //字数
    public function zishu(){
        $this->display();
    }

     //去重
    public function quc(){
        $this->display();
    }
    //啪啪啪
    public function papapa(){
        $this->display();
    }
     //ico在线生成
    public function icomake(){
        $this->display();
    }
     //正则表达式
    public function zz(){
        $this->display();
    }
     //对比
    public function duibi(){
        $this->display();
    }
    //下载中心
    public function download(){
        $this->display();
    }
}