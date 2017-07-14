<?php
namespace Tool\Controller;
use Think\Controller;
use Common\Juheip\Ip;
class MiController extends Controller {
    public function __construct() {
        parent::__construct();
        $news=news();
        $this->assign('news',$news);        

    }
    public function mi5(){
        $this->display();
    }

    public function urlmi(){
        $this->display();
    }

    public function escapemi(){
        $this->display();
    }
   
}