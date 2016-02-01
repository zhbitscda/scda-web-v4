<?php
class AdminAction extends Action{
	public function admin(){
        $s=M('student');
        $arr=$s->select();
        $this->assign('data',$arr);
        $sum=$s->count();
        $this->sum=$sum;
 		$this->display();
	}
	 public function soso(){
        $s=M('student');
        $dept1=$_POST['development1'];
        $dept2=$_POST['development2'];
    	$where['development1']=array('like','%'.$dept1.'%');
        $where['development2']=array('like','%'.$dept2.'%');
        $arr=$s->where($where)->select();
    	$this->assign('data',$arr);
    	$this->display('admin');
    }




    public function form(){
        $s=M('student');
        $id=$_GET['studentID'];
        $arr=$s->find($id);
        $this->assign('data',$arr);
        $this->display();
    }
}
?>