<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	 	//	判断用户是否登录通过
	 	if(isset($_SESSION['username']) && $_SESSION['username']!=''){
	 		$this->display();
	 	}else{
	 		$this->redirect('Login/login');
	 	}
    }
}
?>