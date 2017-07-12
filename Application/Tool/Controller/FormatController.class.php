<?php
namespace Tool\Controller;
use Think\Controller;
class FormatController extends Controller {
	// jshtml格式化压缩
    public function jshtml_format(){
        $this->display();
    }
    //css格式化压缩
    public function csszip(){
    	$this->display();
    }

    //json格式化工具	
    public function jsons(){
    	$this->display();
    }

}