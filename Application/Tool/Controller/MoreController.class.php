<?php
namespace Tool\Controller;
use Think\Controller;
use Common\Fanyi\Fanyi;
class MoreController extends Controller {
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
}