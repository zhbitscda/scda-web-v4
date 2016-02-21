<?php
	class LoginAction extends Action{
		 public function login(){
		 	$this->display();
		 }

		 public function doLogin(){
		 	//接受值
		 	//判断用户数据库是否存在
		 	//存在 允许登录
		 	//不存在 显示错误信息
		 	$username=$_POST['username'];
		 	$password=$_POST['password'];
		 	$user=M('user');
		 	$where['username']=$username;
		 	$where['password']=$password;
		 	$count=$user->where($where)->count();
		 	if($count>0){
		 		$_SESSION['username'];
		 		$this->success('成功',U('Admin/admin'));
		 	}else{
		 		$this->error('该用户不存在！');
		 	}
		 }
	}
?>